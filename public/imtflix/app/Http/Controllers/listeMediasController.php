<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Media;
use App\Models\Playlist;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Error;

class listeMediasController extends Controller
{
    function afficherListeMedias(){
        $userRole = User::user_role(); 
        return view("listeMedias",compact('userRole'));
    }

    public function afficherListeMediasParams($params){
        $userRole = User::user_role(); 
        return view("listeMedias",compact('userRole'),['params'=>$params]);
    }

    function afficherAccueil(){
        $userRole = User::user_role(); 
        $categories = Categorie::all();
        $medias_recents = Media::medias_recents();
        $medias_populaires = Media::medias_populaires();
        $playlists_populaires = Playlist::playlists_populaires();
        return view('listeMedias',compact('categories','userRole','medias_recents','medias_populaires','playlists_populaires'));
    }
    /* connextion */

    function afficherLogin(){
        $userRole = User::user_role(); 
        return view('login',compact('userRole'));
    }
    function postLogin(Request $request){
        $credentials = $request->only('email','password');     

        if(Auth::attempt($credentials)){
            $userRole = User::user_role(); 
            return $this->afficherAccueil();
        }
        else{
            $userRole = User::user_role(); 
            return redirect('login',compact('userRole'));
        }
        //return view('login');
    }

    // register

    function afficherRegister(){
        $userRole = User::user_role(); 
        return view('register',compact('userRole'));
    }

    function postRegister(Request $request){

        $data = $request->all();

        try {
            
            if ($chemin_avatar = $request->file('chemin_avatar')) {
                $destinationPath = 'chemin_avatar/';
                $profileImage = date('YmdHis') . "." . $chemin_avatar->getClientOriginalExtension();
                $chemin_avatar->move($destinationPath, $profileImage);
                $data['chemin_avatar'] = "$profileImage";
            }
            
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'chemin_avatar' => $data['chemin_avatar'],
                'id_role_utillisateur'=> 3,
            ]);
            $userRole = User::user_role(); 

            return view('login',compact('userRole'));
       }
       catch(Error $error) {
            $userRole = User::user_role(); 
            return redirect('register',compact('userRole'));

         }
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}

?>
