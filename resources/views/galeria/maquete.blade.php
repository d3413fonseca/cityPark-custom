@extends('layout')

@section('title', "Maquete")

@section('content')

<div class="container">
    <div id="maquete" data-aos="fade-up">
        <h1 class="text-center my-3"><b>Maquete do Projeto</b></h1>
        <hr>
        <div class=" galeria-slide">
            <div>
                <img src="{{ URL::asset('images/gal013.jpg') }}" alt="..." />
            </div>
            <div>
                <img src="{{ URL::asset('images/img022.jpg') }}" alt="..." />
            </div>
            <div>
                <img src="{{ URL::asset('images/gal014.jpg') }}" alt="..." />
            </div>
        </div>
        <h4 class="my-2"><i>Maquete Inicial</i></h4>
    </div>
    
    
    <hr data-aos="fade-right">
    
    <div class="scheme-container my-5" data-aos="fade-up">
        <div class="text-center my-3 header">
            <h1><b>Instalação de Placas para Lugares de Estacionamento</b></h1>
        </div>
        <div class="img-scheme">
            <img class="img-fluid rounded" src="{{ URL::asset('images/lugaresCircuit.png') }}" alt="Instalação de Placas para Lugares de Estacionamento" />
        </div>
    </div>
    
    <hr data-aos="fade-left">

    <div class="scheme-container my-5" data-aos="fade-up">
        <div class="text-center my-3 header">
            <h1><b>Esquema Completo</b></h1>
        </div>
        <div class="img-scheme">
            <img class="img-fluid rounded" src="{{ URL::asset('images/fullCircuit.png') }}" alt="..." />
        </div>
    </div>
   

</div>

@endsection