@extends('layout')

@section('content')

<div class="container">
    <h1 class="text-center my-3"><b>Galeria</b></h1>
    <div class="row gx-2 gy-2 rows-cols-md-4 my-3" id="galeria">
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal001.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal002.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal003.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal004.jpg') }}" alt="..." />
        </div>
    </div>
    <div class="row gx-2 gy-2 rows-cols-md-4 my-2" id="galeria">
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal005.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal006.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal007.jpg') }}" alt="..." />
        </div>
        <div class="col">
            <img class="img-fluid rounded" src="{{ URL::asset('img/gal008.jpg') }}" alt="..." />
        </div>
    </div>
</div>

@endsection