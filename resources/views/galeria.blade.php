@extends('layout')

@section('content')

<div class="container">
    <h1 class="text-center my-3"><b>Galeria do Projeto</b></h1>
    <hr>
    <div class="row gx-2 gy-2 rows-cols-md-4 my-3" id="galeria">
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal001.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal002.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal003.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal004.jpg') }}" alt="..." />
        </div>
    </div>
    <div class="row gx-2 gy-2 rows-cols-md-4 my-2" id="galeria">
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal005.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal006.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal007.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('images/gal008.jpg') }}" alt="..." />
        </div>
    </div>
    
    <hr>
    <h1 class="text-center my-3"><b>Esquema Completo</b></h1>
    <img class="img-fluid rounded" src="{{ URL::asset('images/fullCircuit.png') }}" alt="..." />

</div>

@endsection