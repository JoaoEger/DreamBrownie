@extends('layouts.admin.template')
@section('title', 'Listar produtos')
@section('content')
    <div class="row">
        <div class="col text-center">
            <h1>Produtos</h1>
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <a href="{{ route('produtos.create') }}" class="btn btn-success">ADICIONAR</a>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>IMAGE</th>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>DESCRICAO</th>
                        <th>QUANTIDADE (un)</th>
                        <th>ESTOQUE</th>
                        <th>VALOR (R$)</th>
                        <th>DATA</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $prod)
                        <tr>
                            <td><img src="/upload/{{$prod->image}}" width="110px"></td>
                            <td>{{ $prod->id }}</td>
                            <td>{{ $prod->nome }}</td>
                            <td>{{ $prod->preview }}</td>
                            <td>{{ $prod->quantidade }}</td>
                            <td>{{ $prod->estoque }}</td>
                            <td>{{ $prod->valor }}</td>
                            <td>{{ date('d/m/Y', strtotime($prod->date)) }}</td>
                            <td>
                                @can('permissao', 1)
                                <a href="{{ route('produtos.edit', $prod->id) }}">Editar</a>
                                <a href="#" onclick="deleteRegistro('delete-form')">Deletar</a>
                                <form id="delete-form" class="d-none"
                                    action="{{ route('produtos.destroy', $prod->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ $produtos->links() }}
        </div>
    </div>
    <script>
        function deleteRegistro(elem) {
            if (confirm("Deseja realmente deletar este produto?")) {
                event.preventDefault();
                document.getElementById(elem).submit()
            }
        }
    </script>
@endsection
