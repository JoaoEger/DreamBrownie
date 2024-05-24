@extends('layouts.dreambrownie.layout')
@section('title', 'Inicio')
@section('content')
{{-- INICIO DO CONTEUDO DO SITE --}}
  @php
    $search = (isset($search)) ? $search : "";
  @endphp
    <form class="d-flex" role="search" method="GET" action="/produtos">
      <input class="form-control mt-2 ms-5 me-2 borda-img focus-ring bg-cor" style="--bs-focus-ring-color: rgb(118, 187, 194)" type="search" name="search" value="{{$search}}" placeholder="Buscar produtos" aria-label="Search">
      <button class="btn borda-img txt-cor btn-buscar-transition mt-2 me-5"  type="submit">Buscar</button>
    </form>

<div class="row">
    <div class="col-sm-12 col-md-5 justify-content-center align-items-center">
      <div class="col-8 mx-auto d-flex">
        <h1 class="mt-5 p-2 font rounded display-4 text-center border border-3 borda-bege bege">Sabores do <span class="pt-2 pb-1 badge azul-escuro azul-claro-font">Dia</span></h1>
      </div>
      <!--CAROUSEL DOS SABORES DO DIA-->
      
      <div class="d-flex justify-content-center">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner ">
            
            {{-- ITENS DO CAROUSEL --}}
            @foreach($produtos as $key => $b)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img type="button" src="{{ asset('upload/'. $b->image) }}" class="btn img-carousel" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header azul-bclaro">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">{{$b->nome}}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img src="{{ asset('upload/'. $b->image) }}" class="img-thumbnail rounded float-start img-produto me-3 mb-1" alt="">
                      <p class="">{{$b->descricao}}</p>
                    </div>
                    <div class="modal-footer azul-bclaro">
                      <button type="button" class="btn vermelho text-white" data-bs-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn verde">Adicionar ao Carrinho</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-caption d-md-block">
                <h5 class="text-md">{{$b->nome}}</h5>
                <p class="text-sm">{{$b->preview}}</p>
              </div>
            </div>
            @endforeach
          </div>
          </div>
        </div>
      </div>
          {{-- INICIO DAS INFORMAÇÕES DA EMPRESA --}}
          
          <div class="col-md-7 col-sm-12">
            <div class="col-10 mx-auto d-flex">
              <h1 class="mt-5 p-2 font rounded display-4 text-center border border-3 borda-bege bege">Sobre a empresa <span class="pt-2 pb-1 badge azul-escuro azul-claro-font">Dream Brownie</span></h1>
            </div>
            <div class="d-flex justify-content-start foto-manu">
              <img class="img-manu" src="homem.png" alt="">
              <h5>um dois tres quatro cinco seis sete oito nove dez onze doze treze catorze quinze</h5>
            </div>
          </div>
        </div>
{{-- FIM DA INFORMAÇÃO DA EMPRESA --}}


{{-- INICIO DO CÁRDAPIO PARA ENTREGAS/COMPLETO --}}

<div class="row">
<div class="col-auto mx-auto d-flex">
  <h1 class="mt-5 mb-5 p-2 font rounded display-4 text-center border border-3 borda-bege bege">Cardápio <span class="pt-2 pb-1 badge azul-escuro azul-claro-font">Completo</span></h1>
</div>
</div>
<div class="row justify-content-center">
@foreach($produtos as $b)
<div class="col-md-6 col-sm-12 ">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4 borda-img azul-bnclaro">
                <img src="{{ asset('upload/'. $b->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body azul-bnclaro">
                    <h5 class="card-title">{{$b->nome}}</h5>
                    <p class="card-text">{{$b->preview}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text"><small class="azul-font">R${{$b->valor}}</small></p>
                        <button type="button" class="btn verde" data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->index}}">Adicionar ao Carrinho</button>
                        <div class="modal fade" id="exampleModal{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header azul-bclaro">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$b->nome}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('upload/'. $b->image) }}" class="img-thumbnail rounded float-start img-produto me-3 mb-1" alt="">
                                        <p class="">{{$b->descricao}}</p>
                                        <p class="card-text"><small class="azul-font">R${{$b->valor}}</small></p>
                                      </div>
                                      <div class="modal-footer azul-bclaro">
                                    <button type="button" class="btn vermelho text-white" data-bs-dismiss="modal">Cancelar</button>
                                      <form action="{{ route('cart.add') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="produtoId" value="{{ $b->id }}">
                                        <button type="submit" class="btn verde">Adicionar ao Carrinho</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
{{-- </div>
@foreach ($produto as $p)
</div>
<div class="row">
    <div class="col col-12">
        <div class="card mb-3 bg-cor bg-verde border-success p-1">
            <div class="row g-0 ">
                <div class="col-md-9 p-1">
                    <div class="card-produto" >
                        <h5 class="card-title">{{$p->nome}}</h5>
                        <p class="card-text">{{$p->preview}}</p>
                        @foreach ($padaria as $pad)
                        <a href="/padarias/{{$pad->id}}/{{Illuminate\Support\Str::slug($pad->nome)}}">
                            @if($pad->id == $p->from_padarias)
                            <small>
                                {{$pad->nome}}
                            </small>
                            @endif
                        @endforeach</a>
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
@endsection --}}