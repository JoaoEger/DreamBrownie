@extends('layouts.agoraweb.layout')
@section('title', 'Padarias')
@section('content')
    <div class="row mt-4">
        <div class="col-12 text-center">
            <h1>Padarias</h1><br>
        </div>
    </div>

    <div class="row">
        @foreach ($padaria as $p)
            
        <div class="col col-sm-12 col-md-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$p->imagem}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$p->nome}}</h5>
                            <p class="card-text">{{$p->endereco}}</p>
                            <p class="card-text"><small class="text-body-secondary">{{substr($p->descricao, 0, 85)."..."}}</small></p>
                        </div>
                        <div class="card-action">
                            <a href="/padarias/{{$p->id}}/{{Illuminate\Support\Str::slug($p->nome)}}" class="btn btn-primary">VER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endsection
