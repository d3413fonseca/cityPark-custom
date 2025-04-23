@extends('layout')

@section('title', "Etapa 3")

@section('content')
            <div class="container px-5 mt-5">
                <div class="row gx-5">
                    
                    <div class="col">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Ethernet Shield & Desenvolvimento da Página Web</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Etapa 3</div>
                                <!-- Post categories-->
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Arduino</a>
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Ethernet Shield</a>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4 text-center"><img class="img-fluid rounded imgetapa" src="{{ URL::asset('images/placeholder003.jpg') }}" alt="..." /></figure>
                            <!-- Post content-->
                            <section class="mb-5 etapa">
                                <p class="fw-normal fs-4 text-muted text-center">
                                    <i>
                                        <p>
                                            Nesta etapa, foi criada uma página Web <i>admin</i> que se conecta a um Ethernet Shield, de modo
                                            a gerir os <b>RFIDs</b> e os <b>clientes</b> registados no sistema, estabelecendo uma conexão entre o Arduino
                                            e a página Web.
                                        </p>
                                        <p>
                                            Para o desenvolvimetno desta ferramenta de gestão, vamos usar o <b>Laravel</b>, que é um framework PHP sem custo,
                                            utilizado no desenvolvimento de sistemas web - deixa o código mais simples e legível, com suporte a recursos avançados.
                                        </p>
                                        <p>
                                            Além de utilizarmos o Laravel, vamos utilizar um template já criado, este sendo o <b>AdminLTE 3.2.0</b>
                                            e modificá-lo aos nossos interesses.
                                        </p>

                                    </i>
                                </p>

                                <hr class="aos-init aos-animate" data-aos="slide-left">
                                
                                <div class="container py-3">
                                    <h1 class="text-center my-4 aos-init aos-animate" data-aos="fade-down"><b><i>Tecnologias Usadas</i></b></h1>
                                    <div class="row gx-5 gy-1 row-cols-1 row-cols-md-4 comp">
                                        <div class="col aos-init aos-animate" data-aos="fade-up">
                                            <img src="{{ URL::asset('images/img016.jpg') }}" alt="Ethernet Shield">
                                            <h4>Ethernet Shield</h4>
                                            <hr>
                                            <p>
                                                Utilizado para possibilitar a conexão da nossa 
                                                placa Arduino à Internet.
                                            </p>
                                        </div>
                                        <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                            <img src="{{ URL::asset('images/img017.png') }}" alt="Framework Laravel">
                                            <h4>Framework Laravel</h4>
                                            <hr>
                                            <p>
                                                Utilizada para criar a página Web, e estabelecer a conexão
                                                com a placa Arduino.
                                            </p>
                                        </div>
                                        <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                            <img src="{{ URL::asset('images/img003.png') }}" alt="Sensor RFID">
                                            <h4>Sensor RFID</h4>
                                            <hr>
                                            <p>
                                                Utilizado para registar um utilizador, por meio de utilização
                                                de cartões RFID.
                                            </p>
                                        </div>
                                        <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                            <img src="{{ URL::asset('images/img015.jpg') }}" alt="Motor Servo">
                                            <h4>Chip CD74HC4052</h4>
                                            <hr>
                                            <p>
                                                Utilizado para expandir o número de portas analógicas do Arduino.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="aos-init aos-animate" data-aos="slide-right">
                                
                                
                                <div class="py-3 aos-init aos-animate" data-aos="fade-up">
                                    <h1>Instalação do <i>Laravel & Breeze</i></h1>
                                    <p class="fs-5">
                                        Para esta etapa ser possível, primeiro é preciso instalar o XAMPP/WAMP,
                                        com o Composer. Assim, podemos criar uma aplicação de Laravel e instalar o
                                        pacote de autenticação Breeze.
                                    </p>

                                    <div class="row text-center my-5 align-items-center">
                                        <div class="col">
                                            <img src="{{ URL::asset('images/img019.png') }}" alt="WAMP / XAMPP" class="w-50">
                                        </div>
                                        
                                        <div class="col">
                                            <img src="{{ URL::asset('images/img020.png') }}" alt="Composer" class="w-50">
                                        </div>
                                        
                                        <div class="col">
                                            <img src="{{ URL::asset('images/img017.png') }}" alt="Laravel" class="w-50">
                                        </div>
                                        
                                        <div class="col">
                                            <img src="{{ URL::asset('images/img021.png') }}" alt="Laravel Breeze" class="w-50">
                                        </div>
                                    </div>
                                </div>

                                <hr class="aos-init aos-animate" data-aos="slide-left">

                                <div class="py-3 aos-init aos-animate" data-aos="fade-up">
                                    <h1>Página de Administração <i>CityPark</i></h1>
                                    <p class="fs-5">
                                        Para esta etapa, foi criada, a partir da framework Laravel, uma página de administração,
                                        feita a partir do <i>template</i> <b>AdminLTE</b>.
                                    </p>
                                    
                                    <div class="text-center my-5">
                                        <img src="{{ URL::asset('images/img023.png') }}" alt="Página de Administração" class="w-75">
                                    </div>

                                    <p class="fs-5">
                                        Esta página de administração permite gerir os <b>Clientes</b> e os <b>RFIDs</b>,
                                        registando os seus dados pessoais e a Chave do RFID.
                                </div>
                            </section>
                        </article>
                        <!-- Comments section-->
                    </div>
                </div>
            </div>
@endsection