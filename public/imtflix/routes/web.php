<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Accueil
Route::get('/',
            'App\Http\controllers\listeMediasController@afficherAccueil');

// Profil Utilisateur
Route::get('/monProfil/{id_utilisateur}', 'App\Http\controllers\userController@afficherMonProfil');

// Admin gestion utilisateurs

// Formulaire de création de film
// Route::get('/creerFilm', 'App\Http\controllers\listeMediasController@afficherFormulaire');
// Route::post('creerFilm','App\Http\controllers\listeMediasController@afficherFormulaire');

//route CRUD films
Route::resource('medias', MediasController::class);
// Route::get('creerFilm', 'App\Http\controllers\MediasController@store');

// Route::get('category/{name}/movies', [MoviesController::class, 'index'])->name('movies.category');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
