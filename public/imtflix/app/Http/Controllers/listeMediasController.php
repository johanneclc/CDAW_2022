<?php

namespace App\Http\Controllers;

use App\Models\Film;

use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    function afficherListeMedias(){
        return view("listeMedias");
    }

    public function afficherListeMediasParams($params){
        return view("listeMedias", ['params'=>$params]);
    }

    function afficherAccueil(){
        return view('listeMedias');
    }

    function afficherFormulaire(){
        return view('formulaireFilm');
    }

    function afficheMediasCategories(){
        $films = Film::with(relations: "getFilmsCategories")->get();
    }
}

?>
