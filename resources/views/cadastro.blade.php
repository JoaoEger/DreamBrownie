
@include('agoraweb.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.bundle.css">
    <link rel="stylesheet" href="/css/style.scss">
    <title>Página de Cadastro</title>
</head>
<body>
    <form action="">
        <div>
            <label for="">Insira um e-mail válido:</label>
            <input type="email" placeholder="seuemail@aqui.com" class="bg-danger">
        </div>
        <div>
            <label for="">Senha:</label>
            <input type="password" placeholder="Insira a senha aqui" name="senha">
        </div>
        <div>
            <label for="">Confirme sua senha</label>
            <input type="password" placeholder="Insira a senha aqui" name="verSenha">
        </div>
    </form>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>