@extends('layout')

@section('title', "Galeria")

@section('content')

<div class="container">
    <div id="galeria">
        <h1 class="text-center my-3">
            <b>Galeria Completa</b>
        </h1>
        <hr>
        <div class="row my-3">
        <div class="col mx-3 galeria-slide" data-aos="fade-right">
                <div>
                    <img src="{{ URL::asset('images/gal001.jpg') }}" alt="..." />
                </div>
                <div>
                    <img src="{{ URL::asset('images/gal002.jpg') }}" alt="..." />
                </div>
                <div>
                    <img src="{{ URL::asset('images/gal003.jpg') }}" alt="..." />
                </div>
                <div>
                    <img src="{{ URL::asset('images/gal004.jpg') }}" alt="..." />
                </div>
            </div>

            <div class="col mx-3 galeria-slide" data-aos="fade-left">
                <div>
                    <img src="{{ URL::asset('images/gal005.jpg') }}" alt="..." />
                </div>
                <div>
                    <img src="{{ URL::asset('images/gal006.jpg') }}" alt="..." />
                </div>
                <div>
                    <img src="{{ URL::asset('images/gal007.jpg') }}" alt="..." />
                </div>
                <div>
                    <img src="{{ URL::asset('images/gal008.jpg') }}" alt="..." />
                </div>
            </div>
        </div>

        <div class="text-center" data-aos="fade-up">
            <small> Faz scroll nas imagens! </small>
            <img style="width:100px;" src="{{ URL::asset('images/scroll.gif') }}" alt="Faz Scroll!">
        </div>
        
        <div class="col-8 mt-3 mb-4 galeria-slide tall text-center" data-aos="fade-up">
            <div>
                <img src="{{ URL::asset('images/gal009.jpg') }}" alt="..." />
            </div>
            <div>
                <img src="{{ URL::asset('images/gal010.jpg') }}" alt="..." />
            </div>
            <div>
                <img src="{{ URL::asset('images/gal011.jpg') }}" alt="..." />
            </div>
            <div>
                <img src="{{ URL::asset('images/gal012.jpg') }}" alt="..." />
            </div>
        </div>
    </div>
</div>

@endsection