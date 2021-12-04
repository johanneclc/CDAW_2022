@extends('templateAccueil')

@section('content')
    <h1>Bienvenue 
        @if($userRole!=0)
            {{$userRole["name"]}}
        @endif
    </h1><br>
    <h3 class="text-white">Ici, retrouvez une grande selection de films !!!</h3><br>
@endsection

@section('logo carousel')
    @foreach ($films as $film)
        <div class="single-logo-item">
            <img src="{{ $film->image }}" alt="">
            <h3>{{ $film->titre }}</a></h3>
            <a href="films/{{ $film->id_media }}" class="cart-btn">Détails</a>
        </div>
    @endforeach
@endsection

@section('product section titre')
    <h3><span class="orange-text">Les plus</span> Regardés</h3>
    <p>On vous présente une sélection des films, séries ou autres , les plus regardés pendant
        la dernière période.
    </p>
@endsection

@section('product section content')
    <div class="col-lg-4 col-md-6 text-center">
        <div class="single-product-item">
            <div class="product-image">
                <a href="single-product.html"><img src="{{asset('assets/img/products/affiche1.jpg')}}" height="50%" alt=""></a>
            </div>
            <h3>Titanic</h3>
            <p class="product-price"><span>2018</span> </p>
            <a href="cart.html" class="cart-btn">Regarder</a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 text-center">
        <div class="single-product-item">
            <div class="product-image">
                <a href="single-product.html"><img src="{{asset('assets/img/products/affiche2.jpg')}}" height="50%" alt=""></a>
            </div>
            <h3>Black X Widow</h3>
            <p class="product-price"><span>2017</span> </p>
            <a href="cart.html" class="cart-btn">Regarder</a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 text-center">
        <div class="single-product-item">
            <div class="product-image">
                <a href="single-product.html"><img src="{{asset('assets/img/products/affiche3.jpg')}}" height="50%" alt=""></a>
            </div>
            <h3>Venom</h3>
            <p class="product-price"><span>2018</span> </p>
            <a href="cart.html" class="cart-btn">Regarder</a>
        </div>
    </div>
@endsection

@section('testimonail-section title')
    <h3 class="main-menu"><span class="orange-text">Les Nouveautés </span> </h3>
@endsection

@section('testimonail-section content')
    <div class="single-testimonial-slider">
        <div class="client-avater">
            <img src="{{asset('assets/img/avaters/serie1.jpg')}}" alt="">
        </div>
        <div class="client-meta">
            <p class="testimonial-body">
                YOU | Serie Netflix <br>
                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
            </p>
            <div class="last-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </div>
    <div class="single-testimonial-slider">
        <div class="client-avater">
            <img src="{{asset('assets/img/avaters/serie2.jpg')}}" alt="">
        </div>
        <div class="client-meta">
            <p class="testimonial-body">
                UNBELIVEBALE | Serie Netflix <br>
                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
            </p>
            <div class="last-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </div>
    <div class="single-testimonial-slider">
        <div class="client-avater">
            <img src="{{asset('assets/img/avaters/serie3.jpg')}}" alt="">
        </div>
        <div class="client-meta">
            <p class="testimonial-body">
                Game Of Thrones | Serie Netflix <br>
                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
            </p>
            <div class="last-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </div>
@endsection

@section('latest news title')
    <h3><span class="orange-text">Série</span> Tendances</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
@endsection

@section('latest news content')
    <div class="col-lg-4 col-md-6">
        <div class="single-latest-news">
                <a href="#"><div><img class="latest-news-bg news-bg-1" src="{{asset('assets/img/avaters/friendds.jpg')}}" alt="""></img></div></a>
                <div class="news-text-box">
                    <h3><a href="#">Série Friends</a></h3>
                    <p class="blog-meta">
                        <span class="author"><i class="fas fa-user"></i> Laubert Pascal</span>
                        <span class="date"><i class="fas fa-calendar"></i> 27 December, 1994</span>
                    </p>
                    <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                    <a href="#" class="read-more-btn">Voir les épisodes <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="single-latest-news">
            <a href="#"><div><img class="latest-news-bg news-bg-1" src="{{asset('assets/img/avaters/americans.jpg')}}" alt="""></img></div></a>
            <div class="news-text-box">
                <h3><a href="#">American's Pie</a></h3>
                <p class="blog-meta">
                    <span class="author"><i class="fas fa-user"></i>Alfa Roman</span>
                    <span class="date"><i class="fas fa-calendar"></i> 27 Decembre, 2006</span>
                </p>
                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                <a href="#" class="read-more-btn">Voir les épisodes <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="single-latest-news">
            <a href="#"><div><img class="latest-news-bg news-bg-1" src="{{asset('assets/img/avaters/howimet.jpg')}}" alt="""></img></div></a>
            <div class="news-text-box">
                <h3><a href="#">How i met your mother</a></h3>
                <p class="blog-meta">
                    <span class="author"><i class="fas fa-user"></i>Alfa Roman</span>
                    <span class="date"><i class="fas fa-calendar"></i> 27 Decembre, 2006</span>
                </p>
                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                <a href="#" class="read-more-btn">Voir les épisodes <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
@endsection

