<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cidades;
use App\Models\Padarias;
use Illuminate\Http\Request;

class AdmPadariaController extends Controller
{
    public function index(){
        return view("admin.padaria", [
            "padaria" => Padarias::all(),
            "cidades" => Cidades::select(["id","nome"])->get()
        ]);
    }
}
