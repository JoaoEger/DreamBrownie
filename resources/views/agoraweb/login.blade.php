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
                    <div class="senha alinhainput col-md-9">
                        <label for="">Senha</label>
                        <input type="password" class="form-control" placeholder="Insira seu senha aqui">
                    </div>
                    <div class="alinhalink botao col-md-9">
                        <ul>
                            <li><a href="#">Esqueceu a senha?</a></li>
                            <li><a href="/cadastro">Cadastrar-se</a></li>
                        </ul>
                    </div>
                    <div class="alinhalink">
                        <a href="#" class="qmsomos">Quem somos?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-md-8">
            
        </div>
    </div>
</body>
</html>