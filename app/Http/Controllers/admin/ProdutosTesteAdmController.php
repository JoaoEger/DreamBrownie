<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosTesteAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin/produtos/produtosteste", [
            "produtos" => Produtos::OrderBy("id", "DESC")->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/produtos/create", [
            "padaria" => Padarias::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtos = new Produtos;
        $produtos->nome = $request->nome;
        $produtos->preview = $request->preview;
        $produtos->quantidade = $request->quantidade;
        $produtos->image = $request->image;
        $produtos->preview = $request->preview;
        $produtos->valor = $request->valor;
        $produtos->estoque = $request->estoque;
        $produtos->from_padarias = $request->from_padarias;
        $produtos->date = date("Y-m-d h:i:s");

        //upload da imagem
        if($request->hasfile("image")&&$request->file("image")->isValid()){
            $nome = strtotime("now").".".$request->image->extension();
            $request->image->move(public_path("upload"), $nome);
            $produtos->image = $nome;
        }
        
        $produtos->save();
        return redirect("/admin/produtosteste")->
        with("success","Registro inserido com sucesso.");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produtos::findOrFail($id)->delete();
        return redirect("/admin/produtosteste")->with("success","Registro deletado com sucesso.");
    }
}
