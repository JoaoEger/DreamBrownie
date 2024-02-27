@extends('layouts.admin.template')
@section('title', 'Dashboard Painel Administração')
@section('content')
    <div class="row">
        <div class="col">
            <h1>
                produtos
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="admin-thead table table-striped">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>DESCRICAO</th>
                        <th>DATA</th>
                        <th>IMAGEM</th>
                        <th>PADARIA</th>
                        {{-- <th>&nbsp;</th> --}}
                    </tr>
                </thead>
                <tbody class="admin-tbody width-100vw">
                    @foreach ($produtos as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->preview }}</td>
                            <td>{{ date('d/m/Y', strtotime($p->date)) }}</td>
                            <td><img src="/upload/{{ $p->image }}" width="120px"></td>
                            <td>
                                @foreach ($padarias as $pad)
                                        @if ($pad->id == $p->from_padarias)
                                            {{ $pad->nome }}
                                        @endif
                                    @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>


@endsection
