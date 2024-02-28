@extends("layouts.agoraweb.layout")
@section("title", "Página da Padaria")
@section("content")
<div class="row mt-4">
    <div class="col-12 text-center">
        <h1>Produtos</h1><br>
    </div>
    @foreach ($produto as $p)
</div>
<div class="row">
    <div class="col col-12">
        <div class="card mb-3 bg-cor border-success p-1">
            <div class="row g-0 ">
                <div class="col-md-2">
                    <img src="https://www.sotomano.com/produtos/original/padaria-64736.jpg" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-9 p-1">
                    <div class="card-produto" >
                        <h5 class="card-title">{{$p->nome}}</h5>
                        <p class="card-text">{{$p->preview}}</p>
                    </div>
                    <div class="card-action" height="300px">
                        <span class="badge text-bg-success fs-3" width="50px" >R${{$p->valor}}</span>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="produtoId" value="{{ $p->id }}">
                            <button type="submit" class="btn btn-adicionar-carrinho">Adicionar ao Carrinho</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection 