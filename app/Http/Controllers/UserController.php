<?php

namespace App\Http\Controllers;

use App\Models\MemberContact;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.autenticate');
    }

    public function autenticateMember(Request $request)
    {
        $member = MemberContact::where('email', $request->email)->with('member')->first();
        
        if(empty($member)) return 'não é possivel criar um usuário com esse e-mail';
        return view('user.create', compact('member'));
    }

    public function store(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'member_id' => $id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        return redirect()->route('member.index');
    }
}
