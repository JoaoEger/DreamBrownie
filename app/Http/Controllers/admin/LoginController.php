<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    public function auth(Request $request){
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        //autenticando
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended("/admin");
        }

        return back()->withErrors(["error" => "Email ou senha inválidos."]);
    }

    public function logout(){
        Auth::logout();
        return redirect("/admin/login");
    }
}
