@extends('template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Afficher film</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('gestion_utilisateurs.index') }}"> retrour</a>
            </div>
        </div>
    </div>

    <div class="row text-white">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $user->titre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $user->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Année:</strong>
                {{ $user->annee }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genre:</strong>
                 {{ $user->type->nom_type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie(s) :</strong>
                @foreach($user->categories as $categorie)
                    {{ $categorie->name }}<br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
