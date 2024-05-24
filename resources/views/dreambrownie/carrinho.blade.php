@extends('layouts.dreambrownie.layout')
@section('title', 'Carrinho')
@section('content')

<div class="row">
    <div class="col-auto mx-auto d-flex mb-5">
        <h1 class="font azul-font text-center texto-responsivo mt-5 p-2 rounded display-4 border border-3 borda-bege bege">Todo o seu pedido aqui!</h1>
    </div>
</div>

<div class="row">

  {{-- TELA PARA QUEM TEM A TELA GRANDE --}}
  @foreach($cart as $produtoId => $item)
    <div class="col-12">
        <div class="card mb-4 d-none d-md-block azul-bmclaro" style="max-height: auto;">
            <div class="row g-0">
              <div class="col-md-2">
                <img src="logoBrownie.jpg" class="img-fluid rounded-start produto-car bege-img" alt="...">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title">{{ $item['nome'] }}</h5>
                  <p class="card-text">{{ $item['descricao'] }}</p>
                <div class="d-flex justify-content-between align-items-center mt-5">
                  <p class="card-text"><small class="azul-font">R$ {{ $item['valor'] }}</small></p>
                  <div class="d-flex">
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                        <button type="submit" class="btn bege bege-hover borda-esq">-</button>
                        </button>
                    </form>
                    <span class="badge d-flex align-items-center bege sem-borda px-3">{{$item['quantidade']}}</span>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                        <button type="submit" class="btn bege bege-hover borda-dir">+</button>
                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
        </div>
    </div>            
        {{-- TELA PRA QUEM TEM TELA PEQUENA --}}

        <div class="card mb-4 d-md-none azul-bmclaro">
          <img src="teste.jpg" class="card-img-top produto-car" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item['nome'] }}</h5>
            <p class="card-text">{{ $item['descricao'] }}</p>
            <p class="card-text"><small class="text-body-secondary">R$ {{ $item['valor'] }}</small></p>
            <div class="d-flex justify-content-end">

                <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                    <button type="submit" class="btn bege bege-hover borda-esq">-</button>
                    </button>
                </form>

              <span class="badge d-flex align-items-center bege sem-borda px-3">{{$item['quantidade']}}</span>
              
              <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="produtoId" value="{{ $produtoId }}">
                <button type="submit" class="btn bege bege-hover borda-dir">+</button>
            </form>
            
            </div>
          </div>
        </div>

      </div>
      <div class="row d-flex justify-content-center mb-4">
        <div class="col-11 d-flex justify-content-between align-items-center azul-bnclaro border-radius font-valor pt-2">
          <h3>Total</h3>
          <h3>R$ {{collect($cart)->sum(function ($item) {
            return $item['valor'] * $item['quantidade'];
        })}}</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-auto mx-auto d-flex mb-5 font text-center mt-5">
          <a class="btn border border-3 p-2 borda-bege bege bege-hover rounded display-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <h1 class="texto-responsivo justify-content-center align-items-center">
              <div>Vamos concluir o seu pedido?</div>
              <small class="texto-res-pequeno">Clique aqui!</small>
            </h1>
          </a>
          </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title text-center" id="offcanvasExampleLabel">Preencha as Informações Necessárias</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              <form>
                <div class="mb-3">
                  <label class="form-label">Nome</label>
                  <input type="text" class="form-control" placeholder="Insira seu nome completo">
                </div>

                <div class="mb-3">
                  <label class="form-label">Número de Telefone</label>
                  <input type="text" class="form-control" placeholder="Insira seu número de telefone" value="49 9 " maxlength="13">
                </div>

                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="Insira um E-mail válido">
                </div>

                <h2 class="my-5 text-center">Endereço</h2>

                <div class="mb-3">
                  <label class="form-label">Rua para a entrega</label>
                  <input type="text" class="form-control" placeholder="Insira o nome da rua">
                </div>

                <div class="mb-3">
                  <label class="form-label">Número</label>
                  <input type="text" class="form-control" placeholder="Insira o número de sua residência">
                </div>

                <div class="mb-3">
                  <label class="form-label">Complemento</label>
                  <input type="text" class="form-control" placeholder="Cor, ponto de referência, etc...">
                </div>
                
                {{-- CHECK PARA VER SE É ENTREGA OU NÃO --}}

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Entrega <small>(+R$5)</small>
                  </label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Retirar na Loja
                  </label>
                </div>

                <h2 class="my-5 text-center">Forma de Pagamento</h2>

                    <select class="form-select mb-3" id="metodo de pagamento" name="metodo de pagamento">
                        <option value="cartao">Cartão</option>
                        <option value="pix">Pix</option>
                        <option value="dinheiro">Dinheiro</option>
                    </select>
                </div>

                <div class="mb-3" id="troco-input" style="display: none;">
                    <label class="form-label">Troco para</label>
                    <input type="number" class="form-control" id="troco" name="troco" placeholder="Insira o valor do troco">
                </div>
                  <div>
                    <a type="submit" class="btn borda-bege bege bege-hover" href="/">Concluir Pedido!</a>
                  </div>

                <small>Entraremos em contato para confirmar o pedido!</small>
            </form>
        </div>

          <script>
              document.getElementById('metodo de pagamento').addEventListener('change', function() {
                  const trocoInput = document.getElementById('troco-input');
                  if (this.value === 'dinheiro') {
                      trocoInput.style.display = 'block';
                  } else {
                      trocoInput.style.display = 'none';
                  }
              });
          </script>
            </div>
          </div>
        </div>
    </div>
    


{{-- <h1 class="text-center">Carrinho de Compras</h1>
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
</div> --}}

@endsection