@extends('templateAccueil')

@section('content')
    <h1>Bienvenue</h1><br>
    @if($userRole["role"]==4)
        <h3 class="text-white">Votre compte a été bloqué par un administrateur du site !</h3>
    @endif
    <h5 class="text-white">
        <span class="orange-text h3">Découvrez </span>
        une multitude de médias. 
        <span class="orange-text h3">Exprimez</span> votre avis.
        <span class="orange-text h3"> Partagez </span>vos playlists.
    </h5>
@endsection

@section('logo carousel')
@endsection

@section('product section titre')
    <h3><span class="orange-text">Les plus</span> Regardés</h3>
    <p>On vous présente une sélection des films, séries ou autres , les plus regardés pendant
        la dernière période.
    </p>
@endsection

@section('product section content')
    @foreach($medias_populaires as $media)
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="{{ route('film', $media->id_media) }}" >
                        <img src="{{ $media->image }}" height="50%" alt="">
                    </a>
                </div>
                <h3>{{ $media->titre }}</h3>
                <p class="product-price"><span>{{ $media->annee }}</span> </p>
                <span class="date">{{ $media->count }}  <i class="fas fa-heart"></i></span>
            </div>
        </div>
    @endforeach
@endsection

@section('testimonail-section title')
    <h3 class="main-menu"><span class="orange-text">Les Nouveautés </span> </h3>
@endsection

@section('testimonail-section content')
    @foreach($medias_recents as $media)
        <div class="single-testimonial-slider">
            <div class="client-avater">
                <img src="{{ $media->image }}" alt="">
            </div>
            <div class="client-meta">
                <p class="testimonial-body">
                    {{ $media->titre }} <br>
                    {{ $media->annee }}
                </p>
                <div class="last-icon">
                    <i class="fas fa-quote-right"></i>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('latest news title')
    <h3><span class="orange-text">Playlists</span> Tendances</h3>
    <p>Découvrez les playlists de la communauté ImtFlix
@endsection

@section('latest news content')
    @foreach($playlists_populaires as $playlist)
        <div class="col-lg-4 col-md-6">
            <div class="single-latest-news">
                    <div class="news-text-box">
                        <h3><a href="#">{{ $playlist->nom_playlist }}</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i>{{ $playlist->name }} </span>
                            <span class="date"><i class="fas fa-calendar"></i> {{ substr($playlist->updated_at,0,10) }}</span>
                            <span class="date"><i class="fas fa-heart"></i> {{ $playlist->count }}</span>
                        </p>
                        <a href="#" class="read-more-btn">Détails <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

