<nav class="navbar navbar-expand-lg bege d-flex justify-content-center align-items-center bege-bottom">
    <div class="logo d-flex justify-content-center align-items-center">
      <a href="/">
        <img class="logo rounded float-start" src="logoBrownieMenor.png"alt="">
      </a>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
      <p class="font azul-font text-center texto-responsivo container">O Melhor Brownie da Cidade!</p>
      <a class="btn azul-claro azul-claro-hover text-white" href="/cart">
        <i class="compras bi bi-cart-fill"></i>
      </a>
    </div>
</nav>
{{-- <nav class="navbar navbar-expand-lg bg-cor p-0 shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img src="{{asset("logoSemFundo.png")}}" 
            alt="Nao foi Possivel carregar a imagem" height="75" width="65"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link active txt-cor btn-nav " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor btn-nav" href="/produtos">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor btn-nav" href="/cart">Carrinho</a>
                </li>
            </ul>
            @php
                $search = (isset($search)) ? $search : "";
            @endphp
            <form class="d-flex" role="search" method="GET" action="/produtos">
                <input class="form-control me-2 border-brown focus-ring bg-cor" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" type="search" name="search" value="{{$search}}" placeholder="Buscar produtos" aria-label="Search">
                <button class="btn border-brown txt-cor btn-buscar-transition"  type="submit">Buscar</button>

            </form>
        </div>
    </div>
</nav> --}}

{{-- divisao --}}
