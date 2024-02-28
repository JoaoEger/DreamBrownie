<?php

namespace App\Http\Controllers;

use App\Models\Padarias;
use App\Models\Produtos;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function produtos(){
        $search = request("search");
        if($search){
            $produtos = Produtos::where([
                ["nome", "like", "%{$search}%"]
            ])->paginate(100);
        }else{
            $produtos = Produtos::paginate(10);
        };

        return view("/agoraweb/produtos", [
            "produto" => $produtos,
            "padaria" => Padarias::all(),
            "search"=> $search
        ]);
        
    }

    public function index(){
    $produtos = Produtos::all();
    return view('agoraweb/produtos', compact('produtos'));
}
}
