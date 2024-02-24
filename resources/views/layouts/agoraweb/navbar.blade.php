<nav class="navbar navbar-expand-lg bg-cor p-0 shadow">
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
                    <a class="nav-link txt-cor txt-cor btn-nav" href="/padarias">Padarias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor btn-nav" href="/produtos">Produtos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link txt-cor btn-nav " href="/cadastro">Cadastro</a>
                </li>
            </ul>
            @php
                $search = (isset($search)) ? $search : "";
            @endphp
            <form class="d-flex" role="search" method="GET" action="/produtos">
<<<<<<< HEAD
                <input class="form-control me-2 border border-brown focus-ring bg-cor" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" type="search" placeholder="Buscar produtos" aria-label="Search">
                <button class="btn border border-brown txt-cor btn-buscar-transition"  type="submit">Buscar</button>
=======
                <input class="form-control me-2 border-brown focus-ring bg-cor" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" type="search" name="search" value="{{$search}}" placeholder="Buscar produtos" aria-label="Search">
                <button class="btn border-brown txt-cor btn-buscar-transition"  type="submit">Buscar</button>
>>>>>>> bb3d76a71c5a3d5b059850248e59f35663b2caa5
            </form>
        </div>
    </div>
</nav>

{{-- divisao --}}
