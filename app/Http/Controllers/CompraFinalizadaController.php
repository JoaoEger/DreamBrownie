<?php

namespace App\Http\Controllers;

use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class CompraFinalizadaController extends Controller
{
    public function compraFinalizada(){
        return view("/agoraweb/compraFinalizada", [
            "produtos" => Produtos::all(),
            "padarias" => Padarias::select(["id", "nome"])->get(),
            "total" => 0
        ]);
    }
}
