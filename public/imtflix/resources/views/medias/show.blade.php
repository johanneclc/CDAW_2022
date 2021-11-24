@extends('medias.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Afficher film</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medias.index') }}"> retrour</a>
            </div>
        </div>
    </div>

    <div class="row text-white">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $media->titre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $media->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Année:</strong>
                {{ $media->annee }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genre:</strong>
                 {{ $media->type->nom_type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie(s) :</strong>
                @foreach($media->categories as $categorie)
                    {{ $categorie->name }}<br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
