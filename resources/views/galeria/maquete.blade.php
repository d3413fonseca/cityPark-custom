@extends('layout')

@section('content')

<div class="container">
    <div id="maquete">
        <h1 class="text-center my-3"><b>Maquete do Projeto</b></h1>
        <hr>
        <div class="row gx-2 gy-2 rows-cols-md-4">
            <div class="col">
                <img class="img-fluid rounded my-2" src="{{ URL::asset('images/gal013.jpg') }}" alt="..." />
            </div>
            <h4 class="my-2"><i>Maquete Inicial</i></h4>
        </div>
    </div>
    
    
    <hr>
    <div class="text-center my-3">
        <h1><b>Esquema Completo</b></h1>
        <button id="btn-scheme" class="btn btn-secondary">Ver esquema completo</button>
    </div>
    <div id="img-scheme">
        <img class="img-fluid rounded" src="{{ URL::asset('images/fullCircuit.png') }}" alt="..." />
    </div>

</div>

@endsection