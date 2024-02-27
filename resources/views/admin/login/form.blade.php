<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Login Administrador</title>
</head>
<body>
    <main style="background-color: #FFFDD7!important">
        <div class="container vh-100" style="background-color: #FFFDD7!important">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title">LOGIN</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route("login.auth")}}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" autofocus required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="mb-3 text-end">
                                    <button type="submit" class="btn btn-outline-black">ENTRAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>