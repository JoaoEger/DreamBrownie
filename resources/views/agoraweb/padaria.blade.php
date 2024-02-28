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
        <div class="card mb-3 bg-verde border-brown">
            <div class="row g-0 ">
                <div class="col-md-2">
                    <img src="{{$p->image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-produto" >
                        <h5 class="card-title">{{$p->nome}}</h5>
                        <p class="card-text">{{$p->preview}}</p>
                    </div>
                    <div class="card-action">
                        <h2 class="card-text">R${{$p->valor}}</h2>
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