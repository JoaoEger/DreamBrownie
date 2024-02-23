<?php

namespace App\Http\Controllers;

use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function produtos(){
        return view("/agoraweb/produtos", [
            "produto" => Produtos::all(),
            "padaria" => Padarias::select("id", "nome")->get()
        ]);
        
    }
}
