<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Error;

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
            return view('listeMedias');
        }
        else{
            return redirect('login');
        }
        //return view('login');
    }

    // register

    function afficherRegister(){
        return view('register');
    }

    function postRegister(Request $request){
        $data = $request->all();

        try {
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            return redirect('login');
       }
       catch(Error $error) {
            return redirect('register');
           //return view('error');

         }
    }

    public function destroy(Request $request)
    {
        $this->guard->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('');
    }

}

?>
