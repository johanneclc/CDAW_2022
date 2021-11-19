@extends('template') 

@section('content')
    <h1>Inserer un film</h1><br>
    <div class="container">
            <label for="pseudo" class="text-white"><b>Titre</b></label>
            <input type="text" placeholder="Titre" name="titre" required >
            <br>
            
            <label for="nom" class="text-white"><b>Catégorie</b></label>
            <input type="text" placeholder="Catégorie" name="categorie" required >
            <br>

            <a type="submit" class="boxed-btn">Insérer</a>
            
          </div>
@endsection


