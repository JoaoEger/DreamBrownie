<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class AdmProdutosController extends Controller
{
    public function index(){
        return view("admin.produtos", ["produtos" => Produtos::all(), "padarias" => Padarias::all()]);
    }
}
