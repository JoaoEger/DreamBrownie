@extends('layouts.agoraweb.layout')
@section('title', 'Compra Finalizada')
@section('content')
    <h1 class="text-center">Compra Finalizada com Sucesso!</h1>
    
    <div class="row justify-content-center">
        <div class="col-5 align-self-center">
            <table class="table tabela-background shadow">
                <thead>
                    <tr class="text-center">
                        <th>PRODUTO</th>
                        <th>PREÇO UNITÁRIO</th>
                        <th>UNIDADES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $produtoId => $item)
                    {{-- <li>
                        {{ $item['nome'] }} - R$ {{ $item['valor'] }} x {{ $item['quantidade'] }}
                    </li> --}}
                    <tr>
                        <td>
                            {{ $item['nome'] }}
                        </td>
                        <td>R$ {{ $item['valor'] }}</td>
                        <td>{{ $item['quantidade'] }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">Total</td>
                        <td>R$ {{collect($cart)->sum(function ($item) {
                            return $item['valor'] * $item['quantidade'];
                        })}}</td>
                    </tr>                 
                </table>
        </div>
    </div>
    <h1 class="text-center">Método de Pagamento</h1>
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12 mt-5">
            <a href="#"><img src="cartao.png" class="img-fluid img-compra"></a>
            
        </div>
        <div class="col-md-4 col-sm-12 mt-5">
            <button id="open-popup" class="btn">
                <img src="dinheiro.png" class="img-fluid img-compra">
            </button>
            <div id="popup" style="display: none;">
                <div class="input-group mb-auto">
                    <span class="input-group-text">R$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                  </div>
                <button class="btn btn-outline-warning"id="close-popup">Enviar</button>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-5">
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="pix.png" class="img-fluid img-compra"></a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chaves PIX</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        121358751356
                        <img src="insta.png" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                    <a href="/" class="btn btn-outline-danger">Finalizar</a>
                    </div>
                </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <h2 class="text-center mt-5">
            <a href="#" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Chegou!</a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agradecimento do grupo Àgora</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati harum officiis omnis culpa, corrupti blanditiis inventore sit animi earum fugit eius ex praesentium, eos quia voluptatum expedita voluptas aliquid ad!ssss
                        </div>
                        <div class="modal-footer">
                        <a href="/" class="btn btn-outline-danger">Finalizar</a>
                        </div>
                    </div>
                    </div>
                </div>
            <button id="open-popup" class="btn btn-outline-danger btn-lg">Não Chegou!</button>
            <div id="popup" style="display: none;">
                <h6>Entre em contato conosco!</h6>
                <h6>(49) 9 9999-9999</h6>
                <button class="btn btn-outline-danger"id="close-popup">Fechar</button>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#open-popup').click(function(){
            $('#popup').fadeIn();
        });

        $('#close-popup').click(function(){
            $('#popup').fadeOut();
        });
    });
</script>
        </h2>
        
        <div class="col-md-4 mt-5">
            <h4 class="text-center">Seu pedido chega em 10 minutos</h4>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <img src="bicicleta.png" class="img-fluid img-compra">
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="row">      
                <div class="col-12 row-down">
                    <img src="linha.png" class="linha-img">
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <h4 class="text-center">Seu pedido chegou</h4>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <img src="casa.png"  class="img-fluid img-compra">
                </div>
            </div>
        </div>
    </div>
@endsection