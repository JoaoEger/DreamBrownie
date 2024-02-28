@extends('layouts.agoraweb.layout')
@section('title', 'Carrinho')
@section('content')

<h1 class="text-center">Carrinho de Compras</h1>
<div class="row justify-content-center">
    <div class="col-5 align-self-center">
        <table class="table tabela-background shadow mt-4">
            <thead>
                <tr class="text-center">
                    <th>PRODUTO</th>
                    <th>PREÇO UNITÁRIO</th>
                    <th>UNIDADES</th>
                    <th>Remover</th>
                    <th>Adicionar</th>
                </tr>
            </thead>
            <tbody class="justify-content-center">
                @foreach($cart as $produtoId => $item)
                {{-- <li>
                    {{ $item['nome'] }} - R$ {{ $item['valor'] }} x {{ $item['quantidade'] }}
                </li> --}}
                <tr class="text-center">
                    <td>
                        {{ $item['nome'] }}
                    </td>
                    <td>R$ {{ $item['valor'] }}</td>
                    <td>
                        {{ $item['quantidade'] }}
                    </td>
                    <td class="justify-content-center">
                        <div style="max-width: 20px, justify-content-center">
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                                <button type="submit" class="btn-remover-carrinho bg-cor"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div style="max-width: 20px, justify-content-center ">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                                <button type="submit" class="bg-cor btn-adicionar-carrinho"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                    </svg></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                <tr class="total-background">
                    <td></td>
                    <td></td>
                    <td class="fs-4" colspan="2">Total</td>
                    <td class="fs-4">R$ {{collect($cart)->sum(function ($item) {
                        return $item['valor'] * $item['quantidade'];
                    })}}</td>
                </tr>                 
            </table>
            <a href="{{ route('cart.checkout') }}" class="btn btn-outline-success">Finalizar Compra</a>
    </div>
</div>

@endsection