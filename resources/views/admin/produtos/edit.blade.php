@extends('layouts.admin.template')
@section('title', 'criar produtos')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar um produto</h1>
        </div>
    </div>
    <form action="{{ route('produtos.update', $produtos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col col-sm 12 col-md-4 mb-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{$produtos->nome}}" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-8 mb-3">
                <label for="preview">Descricao</label>
                <input type="text" id="preview" name="preview" value="{{$produtos->preview}}" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-2 mb-3">
                <label for="quantidade">Quantidade (un)</label>
                <input type="text" id="quantidade" name="quantidade" value="{{$produtos->quantidade}}" class="form-control">
            </div>

            <div class="col col-sm 12 col-md-4 mb-3">
                <label for="image">imagem</label>
                <div class="input-group">
                  <label for="image" class="input-group-text">
                    <img src="/upload/{{$produtos->image}}" width="60px">
                  </label>
                  <input type="file" id="image" name="image" class="form-control">
                </div>
            </div>

            <div class="col col-sm 12 col-md-2 mb-3">
                <label for="valor">Valor em R$</label>
                <input type="text" id="valor" name="valor" value="{{$produtos->valor}}" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-2 mb-3">
                <label for="estoque">Estoque</label>
                <input type="text" id="estoque" name="estoque" value="{{$produtos->estoque}}" class="form-control">
            </div>
            <div class="col col-sm 12 col-md-4 mb-3">
                <label for="from_padarias">Padaria</label>
                <select name="from_padarias" id="from_padarias" class="form-select">
                    <option value="">Selecione uma padaria</option>
                    @foreach ($padaria as $pad)
                        <option value="{{ $pad->id }}" @if($pad->id == $produtos->from_padarias) selected @endif>{{ $pad->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-succes">SALVAR</button>
            </div>

        </div>
    </form>
@endsection