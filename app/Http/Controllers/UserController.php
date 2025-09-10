<?php

namespace App\Http\Controllers;

use App\Models\MemberContact;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(LoginRequest $request)
    {
        $result = $this->autenticateMember($request->email);
        if($result instanceof RedirectResponse){
            return $result;
        }
        
        User::create([
            'member_id' => $result->id,
            'name' => $result->first_name . '' . $result->last_name,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_admin' => $request['is_admin']
        ]);
        
        return redirect()->route('member.index');
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
