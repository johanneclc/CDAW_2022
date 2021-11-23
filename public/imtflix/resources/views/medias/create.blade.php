@extends('medias.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-white">Créer un média</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Vous avez des erreurs !!! .<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('medias.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-white">Type du média :</strong>
                <div class="select">
                    <select name="id_type">
                        @foreach($types as $type)
                            <option value="{{ $type->id_type }}">{{ $type->nom_type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-white">Titre :</strong>
                <input type="text" name="titre" class="form-control" placeholder="Titre du film">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-white">Annee:</strong>
                <input type="year" name="annee" class="form-control" placeholder="Année">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-white">Genre Film:</strong>
                <select name="id_categorie" class="select" multiple>
                    @foreach($categories as $category)
                            <option value="{{ $category->id_categorie }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-white">Description :</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
                <a class="btn btn-primary" href="{{ route('medias.index') }}"> Retour</a>
        </div>

    </div>

</form>
@endsection
