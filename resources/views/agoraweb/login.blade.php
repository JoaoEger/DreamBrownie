<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources\sass\login.scss">
    <title>Página de Login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="row container-fluid">
        <div class="col-sm-12 col-md-4 bg-cor base">
            <h1 class="titulo txt-cor">Conecte ao ÀgoraWeb</h1>
            <div>
                <img src="logoSemFundo.png" class="login-img mx-auto d-block img-fluid" alt="Não foi possível carregar a imagem">
            </div>
            <div >
                <form action="{{route("login.autenticacao")}}" method="POST">
                    @csrf
                    <div class="email alinhainput col-md-9">
                        <label for="email" class="txt-cor">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email aqui" autofocus required>
                    </div>
                    <div class="senha alinhainput col-md-9">
                        <label for="password" class="txt-cor">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Insira seu senha aqui" required>
                    </div>
                    <div class="alinhalink col-md-9 ">
                        <ul class="">
                            <li><button class="btn border border-2 border-green btn-login" type="submit">Entrar</button></li>
                            <li><a class="btn border border-2 border-green btn-login" href="/home">Entrar como convidado</a></li>
                            <li><a class="btn border border-2 border-green btn-login" href="/cadastro">Cadastrar-se</a></li>
                        </ul>
                    </div>
                    <div class="alinhalink">
                        <a href="/quemsomos" class="qmsomos">Quem somos?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-md-8">
            <div id="carouselExampleAutoplaying" class="carousel slide oi" data-bs-ride="carousel">
                <div class="carousel-inner" style="">
                  <div class="carousel-item active">
                    <img src="fita2.png" class="d-block w-100" alt="">
                </div>
                  <div class="carousel-item">
                    <img src="foto.jpeg" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="imagem.jpeg" class="d-block w-100" alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</body>
</html>

