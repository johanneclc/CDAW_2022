<?php

namespace App\Http\Controllers;

use App\Models\Film;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    function afficherListeMedias(){
        return view("listeMedias");
    }

    public function afficherListeMediasParams($params){
        return view("listeMedias", ['params'=>$params]);
    }

   

    function afficherFormulaire(){
        return view('formulaireFilm');
    }

    function afficheMediasCategories(){
        $films = Film::with(relations: "getFilmsCategories")->get();
    }
    function afficherAccueil(){
        return view('listeMedias');
    }
    /* connextion */

    function afficherLogin(){
        return view('login');
    }
    function postLogin(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect('listeMedias');
        }
        else{
            return redirect('login');
        }
        //return view('login');
    }
    function afficherRegister(){
        return view('register');
    }

}

?>
