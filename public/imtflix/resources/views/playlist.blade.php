@extends('templateAccueil')

@section('content')
    <h1>{{  $playlist->nom_playlist }}</h1><br>
@endsection

@section('logo carousel')
@endsection

@section('product section titre')
    <h3><span class="orange-text">Les</span> Médias</h3>
@endsection

@section('product section content')
    @foreach($medias as $media)
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <img src="{{ $media->image }}" alt="">
                <h3>{{ $media->titre }}</h3>
                <a href="{{route('film',$media->id_media) }}" class="cart-btn">Détails</a>
            </div>
        </div>
    @endforeach
@endsection
