@extends('layouts.admin.template')
@section('title', 'Dashboard Painel Administração')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <body>
            <div class="row">
                <div class="col">
                    <h1>
                        sua padaria
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NOME</th>
                                <th>DESCRICAO</th>
                                <th>DATA</th>
                                <th>TELEFONE</th>
                                <th>CIDADE</th>
                                <th>IMAGEM</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($padaria as $p)
                                <tr>
                                    <td>{{ $p->nome }}</td>
                                    <td>{{ $p->descricao }}</td>
                                    <td>{{ date('d/m/Y', strtotime($p->date)) }}</td>
                                    <td>{{ $p->descricao }}</td>
                                    <td>
                                        @foreach ($cidades as $c)
                                            @if ($c->id == $p->from_cidades)
                                                {{ $c->nome }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td><img src="/upload/{{ $p->imagem }}" width="120px"></td>
                                    <td>
                                        @can('deleta-artigo', 1)
                                            <a href="{{ route('artigos.edit', $a->id) }}">Editar</a>
                                            <a href="#" onclick="deleteRegistro('delete-form')">Deletar</a>
                                            <form id="delete-form" class="d-none"
                                                action="{{ route('artigos.destroy', $a->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endcan
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>

    </html>

@endsection
