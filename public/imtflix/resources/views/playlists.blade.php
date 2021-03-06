@extends('templateAccueil')

@section('content')
    <h1>Bienvenue</h1><br>
    <h3 class="text-white">Ici, retrouvez une grande selection de films !!!</h3><br>
@endsection

@section('logo carousel')
@endsection

@section('product section titre')
    <h3><span class="orange-text">Mes</span> Abonnements</h3>
@endsection

@section('product section content')
    @foreach($abonnements as $abonnement)
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                {{-- <div class="product-image">
                    <a href="single-product.html"><img src="{{asset('assets/img/products/affiche1.jpg')}}" height="50%" alt=""></a>
                </div> --}}
                <h3>{{ $abonnement->nom_playlist }}</h3>
                <a href="playlists/{{ $abonnement->id_playlist }}" class="cart-btn">Détails</a>
            </div>
        </div>
    @endforeach
@endsection

@section('testimonail-section title')
    <h3 class="main-menu"><span class="orange-text">Mes playlists</span> </h3>
@endsection

@section('testimonail-section content')
    @foreach($creations as $creation)
    <div class="single-testimonial-slider">
        <div class="client-avater">
            <img src="{{asset('assets/img/avaters/serie1.jpg')}}" alt="">
        </div>
        <div class="client-meta">
            <p class="testimonial-body">
                {{ $creation->nom_playlist }} <br>
            </p>
            <div class="last-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
        <a href="playlists/{{ $abonnement->id_playlist }}" class="cart-btn">Détails</a>
    </div>
    @endforeach
    <div class="single-testimonial-slider">
        <div class="client-avater">
            <img src="{{asset('assets/img/avaters/serie1.jpg')}}" alt="">
        </div>
        <div class="client-meta">
            <p class="testimonial-body">
                test <br>
            </p>
            <div class="last-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </div>
@endsection

@section('latest news title')
    <h3><span class="orange-text">La</span> Communauté</h3>
    <p>Découvre les playlists des autres utilisateurs de ImtFlix ! </p>
@endsection

@section('latest news content')
    @foreach($playlists_communaute as $playlist)
    <div class="col-lg-4 col-md-6">
        <div class="single-latest-news">
                <div class="news-text-box">
                    <h3><a href="#">{{ $playlist->nom_playlist }}</a></h3>
                    <p class="blog-meta">
                        <span class="author"><i class="fas fa-user"></i>{{ $playlist->nom_utilisateur }}</span>
                        <span class="date"><i class="fas fa-calendar"></i> {{ $playlist->updates_at }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

