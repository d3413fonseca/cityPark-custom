<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CityPark</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('dist/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/customstyles.css') }}" rel="stylesheet" />

        <!-- ANIMATE ON SCROLL -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>   
        <!-- SCRIPTS PERSONALIZADOS -->
        <script src="{{ URL::asset('js/scripts.js') }}"></script>        
    </head>
    <body class="d-flex flex-column h-100">
        <script>
            AOS.init();
        </script>

        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                <div class="container px-5">
                    <a href="{{ route('index') }}">
                        <img src="{{ URL::asset('images/img001.png') }}"  alt="Colégio de São Gonçalo">
                    </a>
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <b><span style="font-size: 25px;"> CityPark </span></b>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Página Principal</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Galeria</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="{{ route('galeria.index') }}">Etapas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('galeria.maquete') }}">Maquete</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Etapas</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="{{ route('etapa1') }}">Etapa 1</a></li>
                                    <li><a class="dropdown-item" href="{{ route('etapa2') }}">Etapa 2</a></li>
                                    <li><a class="dropdown-item" href="{{ route('etapa3') }}">Etapa 3</a></li>
                                </ul>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="nav-link"
                                        >
                                            Dashboard
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('login') }}"
                                            class="nav-link"
                                        >
                                            Log-in
                                        </a>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

        @yield('content')
        
        </main>

        <div class="sub-footer my-5 mx-auto">
            <a href="https://colegiosaogoncalo.pt/ensino/ensino-secundario/cursos-com-planos-proprios/informatica-aplicada-a-web/">
                <img src="{{ URL::asset('images/logo002.png') }}" alt="Informática Aplicada à Web">
            </a>
            <a href="https://colegiosaogoncalo.pt/">
                <img src="{{ URL::asset('images/logo001.png') }}" class="mx-4" alt="Colégio São Gonçalo" style="width: 150px; height: 150px;">
            </a>
            <a href="https://pessoas2030.gov.pt/">
                <img src="{{ URL::asset('images/logo003.png') }}" alt="Pessoas 2030 / Portugal 2030">
            </a>
        </div>

        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="small m-0 text-white text-center">
                    <i><b>Tecnologias Aplicadas à Web 
                    <br>
                    </b> Turma 12º1C2 2025</i>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ URL::asset('dist/js/scripts.js') }}"></script>
    </body>
</html>
