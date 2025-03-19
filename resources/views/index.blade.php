@extends('layout')

@section('content')
    
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Seja bem-vindo ao nosso Projeto</h1>
                                <p class="lead fw-normal text-white-50 mb-4">
                                    Bem-vindo ao nosso projeto <b><i>CityPark</i></b>, um mini sistema de parque de estacionamento feito pela turma 
                                    12º1C2 para a disciplina de TAWEB.
                                </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-1" href="#etapas">Explorar etapas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <video class="img-fluid rounded-3 video-shadow my-5" id="headervid" src="{{ URL::asset('videos/vid001-mute.mp4') }}" type="video/mp4" controls autoplay loop></video>
                        </div>
                    </div>
                </div>
            </header>

            <div id="post-header"></div>

            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <h2 class="fw-bolder mb-0"><i><b>Funcionalidades</b> do Projeto</i></h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img003.png') }}" alt="RFID">
                                    </div>
                                    <h5><b>Acesso por RFID</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        Para aceder ao parque, é necessário utilizar um cartão RFID. O nosso sistema
                                        admin permite fazer a gestão completa de todos os cartões que acedam ao site.
                                    </p>
                                </div>

                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img005.jpg') }}" alt="RFID">
                                    </div>
                                    <h5><b>15 Lugares de Estacionamento</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        O nosso projeto permite a gestão de 15 lugares de estacionamento, para vagas normais e prioritárias,
                                        indicando as vagas disponíveis através de LEDs RGB, disponibilizando através de luzes azuis ou
                                        verdes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row gx-5 row-cols-1 row-cols-md-3">
                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img017.jpg') }}" alt="RFID">
                                    </div>
                                    <h5><b>Luzes Exteriores</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        O nosso projeto inclui 10 postes de luz instalados, de modo a proporcionar boa iluminação
                                        para o exterior do parque.
                                    </p>
                                </div>

                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img004.jpeg') }}" alt="Sensor de Chama">
                                    </div>
                                    <h5><b>Deteção de Incêndios</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        Através de sensores de chama infravermelhos, o nosso projeto consegue monitorizar a presença de fogo,
                                        acionando um buzzer e ligando uma fita LED para guiar as saídas de emergência aos utilizadores.
                                    </p>
                                </div>

                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img006.png') }}" alt="Sensor de Chama">
                                    </div>
                                    <h5><b>Informação para utilizadores</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        Utilizando ecrãs LCD e displays de segmentos, informações importantes são dadas aos utilizadores,
                                        como a indicação de vagas disponíveis ou avisos de segurança.
                                    </p>
                                </div>
                            </div>

                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img008.png') }}" alt="Sensor de Chama">
                                    </div>
                                    <h5><b>Aplicação móvel</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        O nosso projeto proporciona uma aplicação móvel conveniente feita no App Inventor, permitindo 
                                        uma melhor gestão do parque independentemente do dispositivo acedido.
                                    </p>
                                </div>

                                <div class="col mb-5 h-100 aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                                    <div class="obj mb-3">
                                        <img src="{{ URL::asset('images/img009.png') }}" alt="Sensor de Chama">
                                    </div>
                                    <h5><b>Página Web</b></h5>
                                    <hr>
                                    <p class="mb-0">
                                        O nosso projeto dispõe também de uma página web, utilizada pelos administradores
                                        para monitorizar e gerir o parque de estacionamento de forma eficiente. 
                                    </p>
                                </div>

                                <!--
                                gestão de 15 lugares de estacionamento
                                luzes exteriores
                                informação parar utilizadores
                                sistema deteção de incendios
                                indicação de vagas disponíveis
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="pre-etapas"></div>

            <!-- Pré-vista das etapas do projeto -->
            <section class="py-5" id="etapas">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center aos-init aos-animate" data-aos="fade-in">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder aos-init aos-animate" data-aos="fade-left">Etapas do projeto</h2>
                                <div class="lead fw-normal text-muted mb-5 aos-init aos-animate" data-aos="fade-right">
                                    Explora as etapas que fizemos ao longo do desenvolvimento do projeto.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 aos-init aos-animate" data-aos="fade-up">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ URL::asset('images/placeholder001.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <h3 class="card-title mb-2"><b> Etapa 1 </b></h3>
                                    <p class="card-text">Entrada/Saída do Parque</p>
                                    <hr>
                                    <p class="card-text mb-2">
                                        <small>
                                            Nesta primeira etapa, fizemos o esquema e funções iniciais necessárias
                                            para o projeto.
                                        </small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('etapa1') }}" class="etapa-ver">Ver etapa</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ URL::asset('images/placeholder002.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <h3 class="card-title mb-2"><b> Etapa 2 </b></h3>
                                    <p class="card-text">Lugares de Estacionamento</p>
                                    <hr>
                                    <p class="card-text mb-2">
                                        <small>
                                            Nesta etapa, fizemos as funções e esquema necessários para o funcionamento da gestão dos lugares de estacionamento.
                                            <br>
                                        </small> 
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('etapa2') }}" class="etapa-ver">Ver etapa</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ URL::asset('images/placeholder003.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <h3 class="card-title mb-2"><b>Etapa 3</b></h3>
                                    <p class="card-text">Ethernet Shield</p>
                                    <hr>
                                    <p class="card-text mb-2">
                                        <small>
                                            Nesta etapa, trabalhámos em código Arduino e Laravel utilizando um Ethernet Shield,
                                            de modo a estabelecer uma conexão entre a placa e a página web.
                                        </small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('etapa3') }}" class="etapa-ver">Ver etapa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Objetivo do projeto -->
            <div class="py-5" id="objetivos">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <h1><b>Qual o objetivo do projeto?</b></h1>
                                <div class="fs-4 mb-4 fst-italic">
                                    O objetivo foi fazer um sistema de gestão de estacionamento inteligente utilizando Arduino,
                                    com controlo de entrada e saída, gestão automática de vagas, iluminação, sistema de segurança contra
                                    incêndios, e comunicação visual e sonora com os utilizadores. O projeto também incluiu o desenvolvimento de 
                                    uma aplicação móvel e uma página Web, para facilitar a utilização pelos clientes e para a manutenção e gestão 
                                    eficiente do parque.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection