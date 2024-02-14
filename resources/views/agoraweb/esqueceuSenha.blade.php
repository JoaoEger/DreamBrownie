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
        <div class="col-sm-12 col-md-4 bg-danger base">
            <h1 class="titulo">Conecte ao ÀgoraWeb</h1>
            <div>
                <img src="logoSemFundo.png" class="login-img mx-auto d-block img-fluid" alt="Não foi possível carregar a imagem">
            </div>
            <div >
                <form action="">
                    <div class="email alinhainput col-md-9">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Insira seu email aqui">
                    </div>
                    <div class="alinhalink botao col-md-9">
                        <ul>
                            <li><a href="#">Enviar email</a></li>
                            <li><a href="/cadastro">Cadastrar-se</a></li>
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
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="logoAgora.jpeg" class="d-block w-100" alt="">
                </div>
                  <div class="carousel-item">
                    <img src="logoAgora.jpeg" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="logoAgora.jpeg" class="d-block w-100" alt="">
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
