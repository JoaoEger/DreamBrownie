@extends('agoraweb.layouts.layout')
@section('title', 'Cadastro')
@section('content')
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
@endsection
