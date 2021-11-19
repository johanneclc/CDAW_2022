@extends('templateAccueil')

@section('content')
    <h1>Bienvenue </h1><br>
@endsection

@section('logo carousel')
    <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            @foreach($categories as $categorie)
                                <span>{{$categorie->name}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
