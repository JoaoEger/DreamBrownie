@extends('layouts.agoraweb.layout')
@section('title', 'Pagina Principal')
@section('content')
    <h1>Bem vindo a Pagina principal (Famosa home)</h1>
    <p>Descrubra as opcoes em nosso site!</p>

    <div class="row mt-4">
        <div class="col-12 text-center">
            <h1>Padarias destaque</h1><br>
        </div>
    </div>

    <div class="row">

        <div class="col col-sm-12 col-md-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="data:image/jpeg;base64,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" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Padaria do Joao</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit consequatur perferendis libero possimus alias nisi soluta dicta nihil, at laborum dignissimos dolores. Quia dolorem commodi voluptate saepe molestias est ipsam.</p>
                            <p class="card-text"><small class="text-body-secondary">A maior padaria de otacilio costa</small></p>
                            <button type="button" class="btn btn-primary">VER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
