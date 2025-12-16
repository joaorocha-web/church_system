<?php

namespace App\Http\Controllers;


use Illuminate\Auth\Events\Registered;
use App\Models\MemberContact;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Exception;

use function PHPUnit\Framework\throwException;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    public function store(LoginRequest $request)
    {
        $result = $this->autenticateMember($request->email);
        if($result instanceof RedirectResponse){
            return $result;
        }
      
        DB::beginTransaction();
        try{
            $user = User::create([
                'member_id' => $result->id,
                'name' => $result->first_name . ' ' . $result->last_name,
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
    
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => UserRole::MEMBER_ROLE
            ]);
    
            DB::commit();

            event(new Registered($user));
            
            return redirect()->route('verification.notice');
        }catch(Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'Falha ao criar usuário');
        }
    }

    private function autenticateMember($email)
    {
        $result = MemberContact::where('email', $email)->with('member')->first();
        if(empty($result)){
            return redirect()->back()->withInput()
            ->withErrors(['email' => 'Esse e-mail é inválido. Certifique-se de que o e-mail utilizado em seu cadastro como membro é o mesmo']);
        } 
        return $result->member;
    }
}
