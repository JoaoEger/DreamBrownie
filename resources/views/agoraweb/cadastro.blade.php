@extends('agoraweb.layouts.layout')
@section('title', 'Cadastro')
@section('content')
    <form action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email aqui">
            <div id="emailHelp" class="form-text">Nos nunca divulgaremos seu email para ninguem.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label bg-">Senha</label>
            <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Digite sua senha aqui">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input border-primary" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Continuar logado por 30 dias</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
