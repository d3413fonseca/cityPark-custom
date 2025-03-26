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
                                    <h1>Gestão de <i>RFIDs</i></i></h1>
                                    <p class="fs-5">
                                        Esta função vai nos permitir visualizar os lugares que estão livres no parque, utilizando
                                        um display de 7 segmentos. Neste display, vão ser contabilizados o número de lugares livres
                                        normais e lugares livres prioritários num outro display.
                                        <br>
                                        Com isto desenvolvemos esta função:
                                    </p>

                                    <div class="text-center my-5">
                                        <img src="{{ URL::asset('images/freePlaces.png') }}" alt="freePlaces()">
                                    </div>
                                    
                                    <p class="fs-5">
                                        Esta função não vai receber nenhum parâmetro, pois só vai contar os lugares livres.
                                        A função inicia por ler vários valores: o valor do potênciómetro, "<b><i>valuePot</i></b>",
                                        e os valores dos lugares livres normais e prioritários, "<b><i>priorityFree</i></b>" e 
                                        "<b><i>normalFree</i></b>". Os últimos dois valores, ao serem lidos, vão sempre ser os
                                        mesmos - 6 e 9 lugares respetivamente.
                                        <br>
                                        De seguida é iniciado um ciclo de repetição, "<b><i>for</i></b>", em que percorre todos 
                                        os canais do multiplicador, tal como na função anterior, e para cada um lê o valor do 
                                        <i>photoresistor</i> e armazena na variável "<b><i>valPhotoResistor</i></b>". Continuando, 
                                        é verificado se o valor do <i>photoresistor</i> é maior ou igual que o valor do 
                                        potenciómetro, caso seja, ele inicia outra condição para verificar qual lugar é que está 
                                        ocupado, um normal ou prioritário, e retira de acordo.
                                    </p>
                                </div>

                                <hr class="aos-init aos-animate" data-aos="slide-right">

                                <div class="py-3 aos-init aos-animate" data-aos="fade-up">
                                    <h1>Função <i>putOnDisplay()</i></h1>
                                    <p class="fs-5">
                                        Esta função vai nos permitir o controlo de ambos os displays de 7 segmentos, para exibir 
                                        o número correto de lugares vagos. A função deverá receber o número de lugares vagos e, com 
                                        base nesse valor, definir quais os números a exibir em cada
                                        <br>
                                        Com isto desenvolvemos esta função:
                                    </p>

                                    <div class="text-center my-5">
                                        <img src="{{ URL::asset('images/putOnDisplay.png') }}" alt="putOnDisplay()">
                                    </div>
                                    
                                    <p class="fs-5">
                                        Esta função vai receber os lugares livres normais e prioritários, e de seguida é criado
                                        uma matriz de  "<b><i>bytes</i></b>", que vai servir como indicação em relação ao número que 
                                        queremos que esteja no display. Por fim, inicia um ciclo de repetição, "<b><i>for</i></b>", e 
                                        vai comparar o número de lugares livres com um número do <i>byte</i> que criamos, e mostrar
                                        esse número.
                                    </p>
                                </div>
                            </section>
                        </article>
                        <!-- Comments section-->
                    </div>
                </div>
            </div>
@endsection