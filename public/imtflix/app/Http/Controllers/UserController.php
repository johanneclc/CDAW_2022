<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\RoleUtilisateur;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Gestion des utilisateurs par l'administrateur
    // Affichages des utilisateurs du site
    public function index()
    {
        $users = User::with('role')->get();
        $userRole = User::user_role(); 

        return view('users.index',compact('users','userRole'));
    }
    // Affichage de la page de modification de role d'un utilisateur
    public function edit(User $user)
    {
        $roles = RoleUtilisateur::all();
        $userRole = User::user_role(); 

        return view('users.edit',compact('user','roles','userRole'));
    }
    // fonction de modification du role uutilisateur
    public function changer_role(Request $request, User $user){
        $request->validate([
            'role' => 'required'
        ]);

        User::where('id',$user->id)->update(['id_role_utilisateur'=>($request->input('role'))]);

        $users = User::with('role')->get();
        $userRole = User::user_role(); 

        return view('users.index',compact('users','userRole'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userRole = User::user_role(); 

        return view('users.show',compact('user','userRole'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    // {
    //     $userRole = User::user_role(); 
    //     return changer_role(["role"=>4],$user);
    // }

    public function afficherMonProfil(User $user){
        $user = Auth::user();
        $userRole = User::user_role(); 

        return view('mon_profil',compact('userRole'));
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user){
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        if ($chemin_avatar = $request->file('chemin_avatar')) {
            $destinationPath = 'chemin_avatar/';
            $profileImage = date('YmdHis') . "." . $chemin_avatar->getClientOriginalExtension();
            $chemin_avatar->move($destinationPath, $profileImage);
            $input['chemin_avatar'] = "$profileImage";
        }else{
            unset($input['chemin_avatar']);
        }

        $user->update($input);

        $image = Auth::user()->chemin_avatar;
        $userRole = User::user_role(); 

        return view('mon_profil',compact('image','userRole'));
    }

    public function deconnection(){
        Auth::logout(); 
    }
}
