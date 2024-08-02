@extends('layouts.main')

@section('title', 'Sobre Nós')

@section('content')
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center p-5">
                <img src="/image/delivery.png" class="img-fluid rounded" alt="Sobre Nós">
            </div>
            <div class="col-md-6 col-sm-12 p-5">
                <h1 class="display-4 mb-4">Sobre a Freitas Package</h1>
                <p class="lead">
                    A Freitas Package é uma empresa dedicada ao gerenciamento e controle de pacotes, oferecendo soluções
                    inovadoras e eficazes para suas necessidades de logística. Com uma equipe altamente qualificada e
                    comprometida com a excelência, nossa missão é proporcionar serviços de alta qualidade que garantam a
                    satisfação de nossos clientes.
                </p>
            </div>
            <hr>
            <div class="col-md-6 col-sm-12 p-5">
                <h1 class="display-4 mb-4">Missão</h1>
                <p class="lead">
                    Nossa missão é fornecer soluções logísticas de ponta, garantindo que cada pacote chegue ao seu destino
                    com segurança e pontualidade. Buscamos a inovação contínua e a melhoria dos nossos processos para
                    oferecer um serviço excepcional.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 text-center p-5">
                <img src="/image/package-grande.png" class="img-fluid rounded" alt="Missao">
            </div>
            <hr>
            <div class="col-md-6 text-center p-5">
                <img src="/image/service.png" class="img-fluid rounded" alt="Servicos">
            </div>
            <div class="col-md-6 col-sm-12 p-5">
                <h1 class="display-4 mb-4">Serviços</h1>
                <ul class="list-group">
                    <li class="list-group-item lead">Gerenciamento de pacotes</li>
                    <li class="list-group-item lead">Rastreamento de envios</li>
                    <li class="list-group-item lead">Criação de relatórios detalhados</li>
                    <li class="list-group-item lead">Suporte ao cliente dedicado</li>
                </ul>
            </div>
            <hr>
            <div class="col-md-6 col-sm-12 p-5">
                <h1 class="display-4 mb-4">Nossa Visão</h1>
                <p class="lead">
                    Ser reconhecida como a líder em soluções logísticas, proporcionando um serviço inovador e confiável que
                    atenda às expectativas dos nossos clientes e impulsione o crescimento do setor.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 text-center p-5">
                <img src="/image/badge.png" class="img-fluid rounded" alt="Visao">
            </div>
        </div>
    </div>
@endsection
