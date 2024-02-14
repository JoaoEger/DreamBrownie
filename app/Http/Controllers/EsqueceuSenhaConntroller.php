<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsqueceuSenhaConntroller extends Controller
{
    public function esqueceuSenha(){
        return view("/agoraweb/esqueceuSenha");
    }
}
