<!doctype html>
<html lang="pt">

<head>
    <title>@yield('title', 'Freitas Package')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Favicon -->
    <link rel="icon" href="/image/package.png" type="image/x-icon" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
</head>

<body>
    <header id="topo">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="mx-5" src="{{ asset('image/package.png') }}"
                        alt="Pasocom Logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('pacotes.index') }}">Pacotes</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="nav-link active">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link active">
                                        Entrar
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link active">
                                            Registrar
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
        <div class="container">
            <a href="#topo" class="fixed-button-topo display-4"
              ><ion-icon name="arrow-up-circle-outline"></ion-icon
            ></a>
          </div>
    </main>

    <footer class="bg-dark text-white p-5">
        <!-- place footer here -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h2 class="my-3">Contato</h2>
                    <a class="text-decoration-none" href="tel:+5517981789454">
                        <p>
                            <ion-icon name="call-outline"></ion-icon>&nbsp; Telefone: (17)
                            98823-0822
                        </p>
                    </a>
                    <a class="text-decoration-none" href="tel:+5517982067647">
                        <p>
                            <ion-icon name="call-outline"></ion-icon>&nbsp; Telefone: (17)
                            98171-3390
                        </p>
                    </a>
                    <a class="text-decoration-none" href="tel:+5517996283401">
                        <p>
                            <ion-icon name="call-outline"></ion-icon>&nbsp; Telefone: (17)
                            99739-7347
                        </p>
                    </a>
                    <a class="text-decoration-none" target="_blank"
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=atendimento@pasocom.com&su=Assunto%20do%20Email&body=Ol%C3%A1,%20este%20%C3%A9%20o%20corpo%20do%20email.">
                        <p>
                            <ion-icon name="mail-outline"></ion-icon>&nbsp; Email:
                            victorb.freitas12@gmail.com
                        </p>
                    </a>
                    <a class="text-decoration-none" target="_blank"
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=financeiro@pasocom.com&su=Assunto%20do%20Email&body=Ol%C3%A1,%20este%20%C3%A9%20o%20corpo%20do%20email.">
                        <p>
                            <ion-icon name="mail-outline"></ion-icon>&nbsp; Email:
                            erosassis5@gmail.com
                        </p>
                    </a>
                    <a class="text-decoration-none" target="_blank" href="https://maps.app.goo.gl/mJbGyXKBN8rofqGi6">
                        <p>
                            <ion-icon name="location-outline"></ion-icon>&nbsp; Endereco:
                            Rua Tocantins, 3220 - Centro, Votuporanga - SP, 15500-000
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h2 class="my-3">Redes Sociais</h2>
                    <div class="d-flex gap-5">
                        <a class="display-6" target="_blank" href="#"><ion-icon
                                name="logo-facebook"></ion-icon></a>
                        <a class="display-6" target="_blank" href="#"><ion-icon
                                name="logo-instagram"></ion-icon></a>
                        <a class="display-6" target="_blank"
                            href="https://api.whatsapp.com/send?phone=+5517988230822&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20seus%20serviços."><ion-icon
                                name="logo-whatsapp"></ion-icon></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h2 class="my-3">Links Úteis</h2>
                    <div class="d-flex flex-column gap-3">
                        <a class="text-decoration-none" href="./sistema.html">Pacotes</a>
                        <a class="text-decoration-none" href="./contato.html">Movimentacoes</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-decoration-none">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-decoration-none">
                                    Entrar
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-decoration-none">
                                        Registrar
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr />
            <p class="text-center">
                &copy; 2024 por Freitas Package. Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
