<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Bem-vindo!');
        }

        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Desconectado com sucesso!');
    }
}
