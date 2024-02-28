<nav class="navbar navbar-expand-lg bg-cor p-0 shadow">
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
                    <a class="admin-nav-link active txt-cor btn-nav" aria-current="page" href="/admin">Painel administração</a>
                </li>
                <li class="nav-item">
                    <a class="admin-nav-link txt-cor btn-nav" href="/admin/padaria">Sua padaria</a>
                </li>
                <li class="nav-item">
                    <a class="admin-nav-link txt-cor btn-nav" href="/admin/produtos">Produtos</a>
                </li>
            </ul>
            {{-- @if (Auth::user()) --}}
            <ul class="btn border-brown p-2 navbar-nav mb-2 align-self-end admin-nav-drop align-self-center">
                <li class="nav-item dropdown admin-nav-drop">
                    <a href="#" class="text-decoration-none text-brown admin-nav-text" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Olá Administrador, seja bem vindo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/></svg></a>
                    <ul class="dropdown-menu border border-brown ">
                        <li><a href="" class="dropdown-item admin-drop-item ">Perfil</a></li>
                        <li><a href="" class="dropdown-item admin-drop-item ">Alterar senha</a></li>
                        <li><a href="/admin/logout" class="dropdown-item admin-drop-item ">Sair</a></li>
                    </ul>
                </li>
            </ul>
        {{-- @endif --}}
            @if (Auth::user())
                <ul class="navbar-nav mb-2 align-self-end">
                    <li class="nav-item dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Olá
                            Administrador, seja bem vindo</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Perfil</a></li>
                            <li><a href="" class="dropdown-item">Alterar senha</a></li>
                            <li><a href="/admin/logout" class="dropdown-item">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>

{{-- divisao --}}
<nav class="navbar navbar-expand-lg bg-cor p-0 shadow">
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
                    <a class="admin-nav-link active txt-cor btn-nav" aria-current="page" href="/admin">Painel administração</a>
                </li>
                <li class="nav-item">
                    <a class="admin-nav-link txt-cor btn-nav" href="/admin/padaria">Sua padaria</a>
                </li>
                <li class="nav-item">
                    <a class="admin-nav-link txt-cor btn-nav" href="/admin/produtos">Produtos</a>
                </li>
            </ul>
            @if (Auth::user())
            <ul class="btn border-brown p-2 navbar-nav mb-2 align-self-end admin-nav-drop align-self-center">
                <li class="nav-item dropdown admin-nav-drop">
                    <a href="#" class="text-decoration-none text-brown admin-nav-text" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Olá Administrador, seja bem vindo<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/></svg></a>
                    <ul class="dropdown-menu border border-brown ">
                        <li><a href="" class="dropdown-item admin-drop-item ">Perfil</a></li>
                        <li><a href="" class="dropdown-item admin-drop-item ">Alterar senha</a></li>
                        <li><a href="/admin/logout" class="dropdown-item admin-drop-item ">Sair</a></li>
                    </ul>
                </li>
            </ul>
        {{-- @endif --}}
            @if (Auth::user())
                <ul class="navbar-nav mb-2 align-self-end">
                    <li class="nav-item dropdown">
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Perfil</a></li>
                            <li><a href="" class="dropdown-item">Alterar senha</a></li>
                            <li><a href="/admin/logout" class="dropdown-item">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
                    </ul>
                </li>
            </ul>
        @endif
        </div>
    </div>
</nav>

{{-- divisao --}}
