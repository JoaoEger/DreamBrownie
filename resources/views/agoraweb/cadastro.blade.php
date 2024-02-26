<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-cor p-0 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset("logoSemFundo.png")}}" 
                alt="Nao foi Possivel carregar a imagem" height="75" width="65"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active txt-cor btn-nav " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-cor txt-cor btn-nav" href="#">Padarias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt-cor btn-nav" href="#">Produtos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link txt-cor btn-nav" href="#">Cadastro</a>
                    </li>
                </ul>
                @php
                    $search = (isset($search)) ? $search : "";
                @endphp
                <form class="d-flex" role="search" method="GET" action="#">
                    <input class="form-control me-2 border-brown focus-ring bg-cor" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" type="search" name="search" value="{{$search}}" placeholder="Buscar produtos" aria-label="Search">
                    <button class="btn border-brown txt-cor btn-buscar-transition"  type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!--conteudo da view-->
    <main class="container p-4">
    <div class="card p-4 border-4 focus-ring" >
        <form action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control border-primary focus-ring" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email aqui" required>
                <div id="emailHelp" class="form-text fw-bold">Nos nunca divulgaremos seu email para ninguem.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold">Senha</label>
                <input type="password" class="form-control border-primary focus-ring" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" id="exampleInputPassword1" placeholder="Digite sua senha aqui" required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label fw-bold">CEP da Cidade em que mora</label>
                <input type="text" class="form-control border-primary focus-ring" style="--bs-focus-ring-color: rgba(141, 95, 46, 0.573)" id="cep" placeholder="Digite o CEP da sua cidade aqui" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input border-primary" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Continuar logado por 30 dias</label>
            </div>
            <button type="submit" class="btn btn-brown btn-cadastro border-brown">Enviar</button>
        </form>
    </div>  
    </main>
</body>
</html>
