<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Padarias;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class ProdutosTesteAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin/produtos/produtos", [
            "produtos" => Produtos::OrderBy("id", "DESC")->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/produtos/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtos = new Produtos;
        $produtos->nome = $request->nome;
        $produtos->descricao = $request->descricao;
        $produtos->preview = $request->preview;
        $produtos->quantidade = $request->quantidade;
        $produtos->image = $request->image;
        $produtos->valor = $request->valor;
        $produtos->estoque = $request->estoque;
        $produtos->date = date("Y-m-d h:i:s");

        //upload da imagem
        if ($request->hasfile("image") && $request->file("image")->isValid()) {
            $nome = strtotime("now") . "." . $request->image->extension();
            $request->image->move(public_path("upload"), $nome);
            $produtos->image = $nome;
        }

        $produtos->save();
        return redirect("/admin/produtos")->with("success", "Registro inserido com sucesso.");
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
        return view("admin/produtos/edit", [
            "padaria" => Padarias::all(),
            "produtos" => Produtos::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produtos = Produtos::find($id);
        $produtos->nome = $request->nome;
        $produtos->preview = $request->preview;
        $produtos->quantidade = $request->quantidade;
        $produtos->preview = $request->preview;
        $produtos->valor = $request->valor;
        $produtos->estoque = $request->estoque;
        $produtos->from_padarias = $request->from_padarias;

        $imgAtual = $produtos->image;
        if ($request->hasFile("image") && $request->file("image")->isValid()) {
            //deletar imagem antiga se tiver
            if (file_exists(public_path("upload/") . $imgAtual)) {
                unlink(public_path("upload/") . $imgAtual);
            }

            //upload
            $nome = strtotime("now") . "." . $request->image->extension();
            $request->image->move(public_path("upload"), $nome);
            $produtos->image = $nome;
        }

        $produtos->update();
        return redirect("/admin/produtos")
            ->with("success", "Produto editado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produtos = Produtos::find($id);

        //verificar se existe uma imagem para deletar
        if(file_Exists(public_path("upload/").$produtos->image)){
            //deleta o arquivo
            unlink(public_path("upload/").$produtos->image);
        }

        $produtos->delete();
        return redirect("/admin/produtos")
            ->with("success", "Registro deletado com sucesso.");
    }
}
