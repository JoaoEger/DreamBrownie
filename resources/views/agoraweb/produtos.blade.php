@extends('layouts.agoraweb.layout')
@section('title', 'Produtos')
@section('content')
@foreach ($produto as $p)
</div>
<div class="row">
    <div class="col col-12">
        <div class="card mb-3 bg-verde border-brown">
            <div class="row g-0 ">
                <div class="col-md-2">
                    <img src="data:image/jpeg;base64,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" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-produto" >
                        <h5 class="card-title">{{$p->nome}}</h5>
                        <p class="card-text">{{$p->preview}}</p>
                        @foreach ($padaria as $pad)
                        <a href="/padarias/{{$pad->id}}/{{Illuminate\Support\Str::slug($pad->nome)}}">
                            @if($pad->id == $p->from_padarias)
                            <small>
                                {{$pad->nome}}
                            </small>
                            @endif
                        @endforeach</a>
                    </div>
                    <div class="card-action">
                        <h2 class="card-text">R${{$p->valor}}</h2>
                        <a href="/padarias/" class="btn btn-primary">Adicionar no carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
@endsection