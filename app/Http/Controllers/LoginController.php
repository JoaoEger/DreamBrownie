<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view("/agoraweb/login");
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        //autenticando
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended("/home");
        }

        return back()->withErrors(["error" => "Email ou senha inválidos."]);
    }

    public function logout(){
        Auth::logout();
        return redirect("/agoraweb/login");
    }
}
