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
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'chemin_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
  
        // $input = $request->only('name','email',Hash::make($data['password']),'chemin_avatar');
  
        // if ($chemin_avatar = $request->file('chemin_avatar')) {
        //                 $destinationPath = 'chemin_avatar/';
        //                 $profileImage = date('YmdHis') . "." . $chemin_avatar->getClientOriginalExtension();
        //                 $chemin_avatar->move($destinationPath, $profileImage);
        //                 $input['chemin_avatar'] = "$profileImage";
        // }
        // User::create($input);
        // return view('login');

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
            ]);

            return view('login');
       }
       catch(Error $error) {
            return redirect('register');

         }
    }

    public function destroy(User $user)
    {
        Auth::logout();
    }

}

?>
