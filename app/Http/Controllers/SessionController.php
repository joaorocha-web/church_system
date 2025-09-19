<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if( !Auth::attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => 'Dados de login inválidos'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/home');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
