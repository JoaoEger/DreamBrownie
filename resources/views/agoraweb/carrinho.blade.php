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
    @empty
        <li>O carrinho está vazio.</li>
    @endforelse
</ul>