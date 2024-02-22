<nav class="navbar navbar-expand-lg bg-cor">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="/home"><a class="navbar-brand" href="home"><img src="logoSemFundo.png"
                    alt="Nao foi Possivel carregar a imagem" height="75" width="65"></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active txt-cor" aria-current="page" href="/admin">Painel administração</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor txt-cor" href="/admin/padaria">Sua padaria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-cor" href="/admin/produtos">Produtos</a>
                </li>
            </ul>
            {{-- @if (Auth::user()) --}}
            <ul class="navbar-nav mb-2 align-self-end">
                <li class="nav-item dropdown">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Olá Administrador, seja bem vindo</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Perfil</a></li>
                        <li><a href="" class="dropdown-item">Alterar senha</a></li>
                        <li><a href="/admin/logout" class="dropdown-item">Sair</a></li>
                    </ul>
                </li>
            </ul>
        {{-- @endif --}}
        </div>
    </div>
</nav>

{{-- divisao --}}
