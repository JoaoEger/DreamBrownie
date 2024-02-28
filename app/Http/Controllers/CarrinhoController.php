<?php

namespace App\Http\Controllers;

use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function add(Request $request){
    $produtoId = $request->produtoId;
    $produto = Produtos::find($produtoId);
    $cart = session()->get('cart', []);
    $cart[$produtoId] = [
        'nome' => $produto->nome,
        'valor' => $produto->valor,
        'quantidade' => isset($cart[$produtoId]) ? $cart[$produtoId]['quantidade'] + 1 : 1,
    ];
    session()->put('cart', $cart);
    return redirect()->route('cart');
    }

    public function remove(Request $request){
        $produtoId = $request->produtoId;
        $cart = session()->get('cart', []);
        if (isset($cart[$produtoId])) {
            unset($cart[$produtoId]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart');
    }

    public function index(){
        $cart = session()->get('cart', []);
        return view('agoraweb/carrinho', compact('cart'));
    }
    public function checkout(){
    $cart = session()->get('cart', []);
    session()->forget('cart');
    return view('agoraweb/compraFinalizada', compact('cart'), [
        "produtos" => Produtos::select('from_padarias')->get(),
        "padarias" => Padarias::select(["id", "nome"])->get()
    ]);
    
}

    
}
