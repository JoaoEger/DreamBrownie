<nav class="navbar navbar-expand-lg bg-cor">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home"><img src="{{asset("logoSemFundo.png")}}" 
            alt="Nao foi Possivel carregar a imagem" height="75" width="65"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active txt-cor" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor txt-cor" href="/padarias">Padaria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor" href="/produtos">Produtos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link txt-cor " href="/cadastro">Cadastro</a>
                </li>
            </ul>
            <form class="d-flex" role="search" method="GET" action="/produtos">
                <input class="form-control me-2 border-brown bg-cor" type="search" placeholder="Buscar produtos" aria-label="Search">
                <button class="btn border-brown txt-cor" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

{{-- divisao --}}
