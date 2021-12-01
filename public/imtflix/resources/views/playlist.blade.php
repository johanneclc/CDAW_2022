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
                {{-- <div class="product-image">
                    <a href="single-product.html"><img src="{{asset('assets/img/products/affiche1.jpg')}}" height="50%" alt=""></a>
                </div> --}}
                <h3>{{ $media->titre }}</h3>
                {{-- <a href="" class="cart-btn">Détails</a> --}}
            </div>
        </div>
    @endforeach
@endsection
