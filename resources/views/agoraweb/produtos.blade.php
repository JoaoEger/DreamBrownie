@extends('layouts.agoraweb.layout')
@section('title', 'Produtos')
@section('content')
@foreach($padaria as $p)
<p>{{$p->nome}}</p>
@foreach ($produto as $produt)
    <p>{{$produt->from_padarias}}</p>
@endforeach
@endforeach
@endsection