@extends('layouts.admin.template')
@section('title', 'Dashboard Painel Administração')
@section('content')

    <div class="container-fluid p-4">
        <h1>Dashboard</h1>
        <p>Bem-vindo ao painel de administração.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Usuários</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Exibir informações sobre os usuários do sistema.</p>
                        <p class="card-text">Total de usuários: </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Produtos</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Exibir informações sobre os artigos do sistema.</p>
                        <p class="card-text">Total de artigos: </p>
                        <p class="card-text">Lucro total: R$ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
