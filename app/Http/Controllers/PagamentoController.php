<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function pagamento(){
        return view("/agoraweb/pagamento");
    }
}
