@extends('layouts.agoraweb.layout')
@section('title', 'Quem Somos?')
@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12">
        <h1 class="text-center">Sobre o Àgora</h1>
        <p>O "ÀgoraWeb" é um projeto inovador que visa reduzir o desperdício de alimentos em padarias locais, ao mesmo tempo em que torna produtos frescos e de qualidade mais acessíveis a todos. O conceito é simples: em vez de descartar produtos que não foram vendidos no final do dia, as padarias podem oferecê-los a preços reduzidos por meio da plataforma "ÀgoraWeb".</p>
        <div class="row">
            <div class="col-md-7">
                <p>O "ÀgoraWeb" não apenas contribui para a redução do desperdício de alimentos, mas também promove a sustentabilidade e a conscientização sobre a importância de aproveitar ao máximo os recursos disponíveis. É uma solução inteligente e inovadora que beneficia a todos: padarias, consumidores e o meio ambiente.</p>
            </div>
            <div class="col-md-1 img-balao">
                <img src="imgQmsomos/balaocoracao.png">
            </div>
            <div class="col-md-3">
                <img src="imgQmsomos/planta.png" >
            </div>
            <h3 class="text-center">Deixe a gente adoçar o seu finalzinho de tarde!</h3>
            <p class="text-center">Atenciosamente, Equipe Àgora.</p>
        </div>
    </div>
    <div class="col-md-6 vol-sm-12 justify-content-end d-flex">
        <ul class="justify-content-end align-items-end">
            <h1 class="text-center ms-5 mb-4">Integrantes do Àgora</h1>
            <li>
                <h4 class="text-center">Daniel Giraldi Michels</h4>
                <p class="d-grid gap-2 d-md-flex justify-content-md-end">Redes Sociais:<a href="//www.instagram.com/danielgmichels?igsh=NTcxcnd0cnR4Nm9q&utm_source=qr" class="btn btn-outline-dark">Instagram</a> <a href="//www.linkedin.com/in/daniel-giraldi-michels-ab93262b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="btn btn-outline-dark">LinkedIn</a></p>
            </li>
            <li>
                <h4 class="text-center">João Arnoldo Eger</h4>
                <p class="d-grid gap-2 d-md-flex justify-content-md-end">Redes Sociais:<a href="//www.instagram.com/joao_eger/" class="btn btn-outline-dark">Instagram</a> <a href="//www.linkedin.com/in/jo%C3%A3o-eger-16364a2a2?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="btn btn-outline-dark">LinkedIn</a></p>
            </li>
            <li class="justify-self-end align-self-end">
                <h4 class="text-center">Sérgio Arrazão</h4>
                <p class="d-grid gap-2 d-md-flex sergio-margin">Redes Sociais:<a href="//www.facebook.com/sergio.arrazao.1?locale=pt_BR" class="btn btn-outline-dark">Facebook</a><a href="//www.facebook.com/sergio.arrazao.1?locale=pt_BR" class="btn"></a>
            </li>
            <li>
                <h4 class="text-center">Thiago Fernandes Jacques</h4>
                <p class="d-grid gap-2 d-md-flex justify-content-md-end">Redes Sociais:<a href="//www.instagram.com/thiagofjacques/" class="btn btn-outline-dark">Instagram</a> <a href="//www.linkedin.com/in/thiago-jacques-3016502a2/" class="btn btn-outline-dark">LinkedIn</a></p>
            </li>
            <li class="d-grid gap-2 d-md-flex justify-content-md-center">
                <img src="imgQmsomos/planta.png" width="100px" class="invertida">
                <img src="imgQmsomos/lampada.png" width="100px" >
                <img src="imgQmsomos/planta.png" width="100px" >
            </li>
        </ul>

    </div>
</div>

@endsection