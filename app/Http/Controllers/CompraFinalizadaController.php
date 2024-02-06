<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraFinalizadaController extends Controller
{
    public function compraFinalizada(){
        return view("/agoraweb/compraFinalizada");
    }
}
