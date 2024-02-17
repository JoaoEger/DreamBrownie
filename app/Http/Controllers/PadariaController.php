<?php

namespace App\Http\Controllers;

use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class PadariaController extends Controller
{
    public function padarias(){
        return view("/agoraweb/padarias");
    }

    public function padaria(){
        return view("/agoraweb/padaria",[
            "produto" => Produtos::inRandomOrder()->limit(10)->get(),
            "padaria" => Padarias::all()
        ]);
    }
}
