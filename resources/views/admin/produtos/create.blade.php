@extends('layouts.admin.template')
@section('title', 'criar produtos')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar um novo produto</h1>
        </div>
    </div>
    <form action="{{ route('produtosteste.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col col-sm 12 col-md-4 mb-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-8 mb-3">
                <label for="preview">Descricao</label>
                <input type="text" id="preview" name="preview" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-2 mb-3">
                <label for="quantidade">Quantidade</label>
                <input type="text" id="quantidade" name="quantidade" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-4 mb-3">
                <label for="image">imagem</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-2 mb-3">
                <label for="valor">Valor em R$</label>
                <input type="text" id="valor" name="valor" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-2 mb-3">
                <label for="estoque">Estoque</label>
                <input type="text" id="estoque" name="estoque" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-4 mb-3">
                <label for="from_padarias">Padaria</label>
                <select name="from_padarias" id="from_padarias" class="form-select">
                    <option value="">Selecione uma padaria</option>
                    @foreach ($padaria as $pad)
                        <option value="{{ $pad->id }}">{{ $pad->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-succes">SALVAR</button>
            </div>

        </div>
    </form>
@endsection
