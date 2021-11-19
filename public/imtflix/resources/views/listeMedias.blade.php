@extends('template') 

@section('content')
    <h1>Bienvenue {{$params}}</h1><br>
@endsection

@section('logo carousel')
    <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="{{asset('assets/img/avaters/serie1.jpg')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{asset('assets/img/avaters/serie2.jpg')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{asset('assets/img/avaters/serie3.jpg')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{asset('assets/img/products/affiche1.jpg')}}" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="{{asset('assets/img/products/affiche3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
