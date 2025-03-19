@extends('layout')

@section('content')
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                       
                        <div class="col">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">Lugares de Estacionamento</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">Etapa 2</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-secondary text-decoration-none link-light">LED RGB</a>
                                    <a class="badge bg-secondary text-decoration-none link-light">Photoresistor</a>
                                    <a class="badge bg-secondary text-decoration-none link-light">Potenciómetro</a>
                                    <a class="badge bg-secondary text-decoration-none link-light">Chip CD74HC4052</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4 text-center"><img class="img-fluid rounded imgetapa" src="{{ URL::asset('images/placeholder002.jpg') }}" alt="..." /></figure>
                                <!-- Post content-->
                                <section class="mb-5 etapa">
                                    <p class="lead fw-normal fs-4 text-muted text-center">
                                        <i>
                                            Nesta etapa vamos fazer a gestão de 15 lugares de estacionamento tendo em atenção
                                            os seguintes aspetos:
                                            <br>
                                            <ul class="lead fw-normal text-muted">
                                                <li>
                                                    Cada lugar é equipado com um <b>LED RGB</b>:
                                                    <ul>
                                                        <li>
                                                            <b>Verde/Vermelho</b>: para vagas normais (verde para vaga livre,
                                                            vermelho para ocupada).
                                                        </li>
                                                        <li>
                                                            <b>Verde/Azul</b>: para vagas prioritárias (verde para livre,
                                                            azul para ocupado).
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <b>Photoresistor</b> em cada lugar para detetar a ocupação da vaga.
                                                </li>
                                                <li>
                                                    <b>Potenciómetro</b> para calibrar a sensibilidade dos photoresistores,
                                                    ajustando a detecção de luz ambiente.
                                                </li>
                                                <li>
                                                    Uso de um <b>Chip CD74HC4052</b> para expandir o número de portas analógicas
                                                    no Arduino, permitindo o controlo eficaz dos sensores e LEDs.
                                                </li>
                                            </ul>
                                        </i>
                                    </p>

                                    <hr class="aos-init aos-animate" data-aos="slide-left">
                                    
                                    <div class="container py-3">
                                        <h1 class="text-center my-4 aos-init aos-animate" data-aos="fade-down"><b><i>Tecnologias Usadas</i></b></h1>
                                        <div class="row gx-5 gy-1 row-cols-1 row-cols-md-4 comp">
                                            <div class="col aos-init aos-animate" data-aos="fade-up">
                                                <img src="{{ URL::asset('images/img011.png') }}" alt="LED RGB">
                                                <h4>LED RGB</h4>
                                                <hr>
                                                <p>
                                                    Utilizado em todos os lugares do parque, onde se irá acender
                                                    na cor vermelha, verde ou azul. 
                                                </p>
                                            </div>
                                            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                                <img src="{{ URL::asset('images/img013.jpg') }}" alt="Photoresistor">
                                                <h4>Photoresistor</h4>
                                                <hr>
                                                <p>
                                                    Utilizado para detetar a ocupação dos lugares no parque.
                                                </p>
                                            </div>
                                            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ URL::asset('images/img014.jpg') }}" alt="Potenciometro">
                                                <h4>Potenciómetro</h4>
                                                <hr>
                                                <p>
                                                    Utilizado para calibrar a sensibilidade dos photoresistores.
                                                </p>
                                            </div>
                                            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ URL::asset('images/img015.jpg') }}" alt="Chip CD74HC4052">
                                                <h4>Chip CD74HC4052</h4>
                                                <hr>
                                                <p>
                                                    Utilizado para expandir o número de portas analógicas do Arduino.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="aos-init aos-animate" data-aos="slide-right">
                                    
                                    <div class="container py-3 text-center" data-aos="fade-up">
                                        <h1 class="my-4 aos-init aos-animate" data-aos="fade-down"><b><i>Funções da etapa</i></b></h1>
                                        <div class="row">
                                            <div class="col">
                                                <a class="btn btn-dark" href="#calibratingThePhotoresistor" data-aos="fade-up">calibratingThePhotoresistor()</a>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-dark" href="#freePlaces" data-aos="fade-up" data-aos-delay="100">freePlaces()</a>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-dark" href="#putOnfDisplay" data-aos="fade-up" data-aos-delay="200">putOnDisplay()</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr class="aos-init aos-animate" data-aos="slide-left">
                                    
                                    <div class="py-3 aos-init aos-animate" id="calibratingThePhotoresistor" data-aos="fade-up">
                                        <h1>Função <i>calibratingThePhotoresistor()</i></h1>

                                        <div class="text-center my-5 img-code">
                                            <img src="{{ URL::asset('images/calibratingThePhotoresistor-1.png') }}" alt="calibratingThePhotoresistor() [1]" class="my-3 w-50">
                                            <img src="{{ URL::asset('images/calibratingThePhotoresistor-2.png') }}" alt="calibratingThePhotoresistor() [2]">
                                            <br><br>
                                            <button class="btn btn-secondary btn-detail">Informação</button>
                                        </div>
                                        
                                        <div class="information">
                                            <p class="fs-5">
                                                Esta função vai nos permitir calibrar os <i>photoresistors</i> de forma a que todos
                                                funcionem em pleno, independentemente da luz ou local onde a maquete se encontra.
                                                <br>
                                                Com isto desenvolvemos esta função:
                                            </p>
                                            <p class="fs-5">
                                                Esta função não vai receber nenhum parâmetro pois vai funcionar só como uma calibração,
                                                de início, a função começa um ciclo de repetição, "<b>for</b>", em que percorre todos
                                                os canais do multiplexador e seleciona o canal correspondente a "<b>i</b>", faz a leitura
                                                do pino conectado e o valor é armazenado no "<b>valPhotoResistor</b>", que é exibido na 
                                                consola. De seguida é iniciado um <i>switch-case</i>, que vai ajudar o código a decidir 
                                                o que fazer para cada caso que encontrar ou definimos - os casos agrupam canais de acordo
                                                com os LEDs encontrados. Quando um caso é encontrado, é chamado uma função 
                                                "<b><i>turnOnOffLEDRGB()</i></b>" e introduzido vários valores recolhidos e um cálculo para
                                                determinar a porta do PCF8574 certa.
                                            </p>
                                            <p class="fs-5">
                                                O objetivo do cálculo "<b><i>(2 * i) - x</i></b>" é encontrar quais saídas no correspondente
                                                PCF8574 devem ser usadas para acender os LEDs correspondentes a cada sensor.
                                                <br>
                                                Como funciona? Cada sensor precisa de dois pinos consecutivos do PCF8574 (um para o LED
                                                "Livre" e outro para o LED "Ocupado"), o cálculo <b><i>(2 * i)</i></b> ajuda a localizar
                                                esses pinos. Ele sempre dá um número par, porque os dois pinos usados por cada sensor
                                                estão lado a lado, e o ajuste, <b><i>x</i></b>, é usado para começar cada grupo no pino 0
                                                do PCF8574 correspondente, já que os sensores são divididos em grupos.
                                            </p>
                                            <p class="fs-5">
                                                Depois desta pequena explicação, seguidamente após chamar a nossa outra função, ele
                                                lê o potenciómetro, componente que vai calibrar, e armazena na variável "<b>valuePot</b>"
                                                e por fim verifica-se se o valor do <i>photoresistor</i> é maior ou igual ao do
                                                potenciómetro - caso seja, o LED fica "Livre", caso contrário, o LED fica "Ocupado".
                                            </p>
                                        </div>
                                    </div>

                                    <hr class="aos-init aos-animate" data-aos="slide-left">

                                    <div class="py-3 aos-init aos-animate" id="freePlaces" data-aos="fade-up">
                                        <h1>Função <i>freePlaces()</i></h1>
                                        <p class="fs-5">
                                            Esta função vai nos permitir visualizar os lugares que estão livres no parque, utilizando
                                            um display de 7 segmentos. Neste display, vão ser contabilizados o número de lugares livres
                                            normais e lugares livres prioritários num outro display.
                                            <br>
                                            Com isto desenvolvemos esta função:
                                        </p>

                                        <div class="text-center my-5 img-code">
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

                                    <div class="py-3 aos-init aos-animate" id="putOnDisplay" data-aos="fade-up">
                                        <h1>Função <i>putOnDisplay()</i></h1>
                                        <p class="fs-5">
                                            Esta função vai nos permitir o controlo de ambos os displays de 7 segmentos, para exibir 
                                            o número correto de lugares vagos. A função deverá receber o número de lugares vagos e, com 
                                            base nesse valor, definir quais os números a exibir em cada display.
                                            <br>
                                            Com isto desenvolvemos esta função:
                                        </p>

                                        <div class="text-center my-5 img-code">
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
            </section>
@endsection