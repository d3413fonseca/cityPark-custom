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
                                    <h1 class="fw-bolder mb-1">Entrada / Saída do Parque</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">Etapa 1</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-secondary text-decoration-none link-light">LED RGB</a>
                                    <a class="badge bg-secondary text-decoration-none link-light">Sensor RFID</a>
                                    <a class="badge bg-secondary text-decoration-none link-light">Motor Servo</a>
                                </header>

                                
                                <!-- Preview image figure-->
                                <figure class="mb-4 text-center"><img class="img-fluid rounded imgetapa" src="{{ URL::asset('images/placeholder001.jpg') }}" alt="..." /></figure>
                                <!-- Post content-->
                                <section class="mb-5 etapa">
                                    <p class="lead fw-normal fs-4 text-muted text-center mb-5">
                                        <i>
                                            Nesta fase do projeto, pretendemos que o acesso e saída do parque seja controlado por um sistema de cartão RFID. 
                                            Há duas cancelas, em que cada uma possui um semáforo com luz vermelha/verde que indica quando o utilizador pode avançar.
                                        </i>
                                    </p>
                                    
                                    <hr class="aos-init aos-animate" data-aos="slide-left">
                                    
                                    <div class="container py-3">
                                        <h1 class="text-center my-4 aos-init aos-animate" data-aos="fade-down"><b><i>Tecnologias Usadas</i></b></h1>

                                        <div class="row gx-5 gy-1 row-cols-1 row-cols-md-3 comp">
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
                                                <img src="{{ URL::asset('images/img003.png') }}" alt="Sensor RFID">
                                                <h4>Sensor RFID</h4>
                                                <hr>
                                                <p>
                                                    Utilizado para registar um utilizador, por meio de utilização
                                                    de cartões RFID.
                                                </p>
                                            </div>
                                            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ URL::asset('images/img012.png') }}" alt="Motor Servo">
                                                <h4>Motor Servo</h4>
                                                <hr>
                                                <p>
                                                    Utilizados para a cancela do parque, servindo como entrada
                                                    e saída.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="aos-init aos-animate" data-aos="slide-right">
                                    
                                    <div class="container py-3 text-center">
                                        <h1 class="my-4 aos-init aos-animate" data-aos="fade-down"><b><i>Circuito da Etapa</i></b></h1>
                                        
                                        <img class="circuit aos-init aos-animate" data-aos="fade-up" src="{{ URL::asset('images/etapa01Circuit.png') }}" alt="Circuito da Etapa 1">
                                    </div>
                                    
                                    <hr class="aos-init aos-animate" data-aos="slide-left">

                                    <div class="container py-3 text-center" data-aos="fade-up">
                                        <h1 class="my-4 aos-init aos-animate" data-aos="fade-down"><b><i>Funções da etapa</i></b></h1>
                                        <div class="row">
                                            <div class="col">
                                                <a class="btn btn-dark" href="#openCloseGate" data-aos="fade-up">openCloseGate()</a>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-dark" href="#readRFID" data-aos="fade-up" data-aos-delay="100">readRFID()</a>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-dark" href="#displayMessage" data-aos="fade-up" data-aos-delay="200">displayMessage()</a>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="aos-init aos-animate" data-aos="slide-right">
                                    
                                    <div class="py-3 aos-init aos-animate" id="openCloseGate" data-aos="fade-up">
                                        <h1>Função <i>openCloseGate()</i></h1>

                                        <div class="text-center my-5 img-code">
                                            <img src="{{ URL::asset('images/openCloseGate.png') }}" alt="openCloseGate()">
                                            <br><br>
                                            <button class="btn btn-secondary btn-detail" id="">Informação</button>
                                        </div>
                                        
                                        <div class="information">
                                            <p class="fs-5">
                                                Esta função vai permitir a abertura e fecho de cada uma das cancelas.
                                                Esta função deverá receber os parâmetros necessários para funcionar com qualquer um 
                                                dos motores servo das cancelas e a deslocação do servo deve ser lenta.
                                            </p>
                                            <p class="fs-5">
                                                Com isto desenvolvemos esta função - recebe dois parâmetros: o servo que vai mover e a indicação se
                                                deve abrir ou não, verifica se tem que abrir ou fechar e de acordo com o servo indicado,
                                                ela abre ou fecha a cancela.
                                            </p>
                                        </div>
                                        
                                    </div>
                                    
                                    <hr class="aos-init aos-animate" data-aos="slide-right">
                                    
                                    <div class="py-3 aos-init aos-animate" id="readRFID" data-aos="fade-up">
                                        <h1>Função <i>readRFID()</i></h1>
                                        
                                        
                                        <div class="text-center my-5 img-code">
                                            <img src="{{ URL::asset('images/readRFID.png') }}" alt="readRFID()" class="w-50">
                                            <br><br>
                                            <button class="btn btn-secondary btn-detail" id="">Informação</button>
                                        </div>
                                        
                                        <div class="information">
                                            <p class="fs-5">
                                                Esta função vai fazer a leitura de um cartão ou chave RFID e vai retornar o estado da permissão,
                                                indicando se o cliente tem autorização para entrar ou sair do parque de estacionamento.
                                            </p>
                                            <p class="fs-5">
                                                Com isto desenvolvemos esta função. Esta função é peculiar, pois não vai receber nenhum parâmetro e vai retornar só
                                                dois valores que vão ser tratados como autorizado e não autorizado. A função começa
                                                por procurar novos cartões e tenta ler o cartão, de seguida mostra o UID da <i>tag</i>,
                                                para motivos de administração e retorna "<b>1</b>" como autorizado e "<b>2</b>" como
                                                não autorizado, isto só para uma chave, mas no futuro será mudado para qualquer uma.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <hr class="aos-init aos-animate" id="displayMessage" data-aos="slide-left">
                                    
                                    <div class="py-3 aos-init aos-animate" data-aos="fade-up">
                                        <h1>Função <i>displayMessage()</i></h1>
                                        
                                        
                                        <div class="text-center my-5 img-code">
                                            <img src="{{ URL::asset('images/displayMessage.png') }}" alt="displayMessage()">
                                            <br><br>
                                            <button class="btn btn-secondary btn-detail" id="">Informação</button>
                                        </div>
                                        
                                        <div class="information">
                                            <p class="fs-5">
                                                Esta função vai nos permitir apresentar mensagens nos ecrãs LCD de entrada e saída
                                                do parque de estacionamento.
                                            </p>
                                            <p class="fs-5">
                                                Com isto desenvolvemos esta função - vai receber 4 parâmetros: "<b>display</b>", que vai ser o LCD onde vai
                                                ser apresentada a mensagem, a "<b>message</b>" que é a mensagem em si, "<b>col</b>"
                                                que é a coluna onde a mensagem vai ser apresentada no LCD, "<b>lin</b>" que vai ser
                                                em que linha irá ser apresentada a mensagem no LCD e por fim "<b>clearLCD</b>", que
                                                vai indicar se o LCD está limpo ou não. 
                                                <br>
                                                Dentro da função verificamos se a variável 
                                                "clearLCD" é verdadeira ou não, para se caso termos de limpar, e de seguida 
                                                indicamos em que linha e coluna deve estar o cursor do LCD, com as variáveis
                                                anteriormente mencionadas, e mostramos a mensagem no LCD indicado.
                                            </p>
                                        </div>
                                    </div>
                                </section>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
@endsection