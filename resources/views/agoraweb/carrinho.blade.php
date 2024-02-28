@extends('layouts.agoraweb.layout')
@section('title', 'Carrinho')
@section('content')

<h1>Carrinho de Compras</h1>
<ul>
    @forelse($cart as $produtoId => $item)
    
        <li>
            {{ $item['nome'] }} - R$ {{ $item['valor'] }} x {{ $item['quantidade'] }}
            <form action="{{ route('cart.remove') }}" method="POST">
                @csrf
                <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                <button type="submit">Remover</button>
            </form>
        </li>
            <li>
                <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                @empty
            <li>O carrinho está vazio.</li>
                @endforelse
                <button type="submit" class="btn btn-adicionar-carrinho">Adicionar ao Carrinho</button>
            </li>
        </form>
    </li>
                <a href="{{ route('cart.checkout') }}">Finalizar Compra</a>
</ul>
@endsection