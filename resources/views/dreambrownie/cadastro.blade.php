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
