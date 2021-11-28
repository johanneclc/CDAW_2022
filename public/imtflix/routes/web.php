<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediasController;
use App\Http\Controllers\UserController;

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

Route::get('/films',
            'App\Http\controllers\MediasController@afficherFilms');

// Profil Utilisateur
Route::get('/mon_profil', 'App\Http\controllers\userController@afficherMonProfil');
Route::put('/modifier_profil','App\Http\controllers\userController@update')->name('modifier_profil');
Route::resource('users', userController::class);

// Admin gestion utilisateurs

// Formulaire de création de film
// Route::get('/creerFilm', 'App\Http\controllers\listeMediasController@afficherFormulaire');
// Route::post('creerFilm','App\Http\controllers\listeMediasController@afficherFormulaire');

//route CRUD films
Route::resource('gestion_medias', MediasController::class);
Route::resource('gestion_utilisateurs', UserController::class);
// Route::get('creerFilm', 'App\Http\controllers\MediasController@store');

// Route::get('category/{name}/movies', [MoviesController::class, 'index'])->name('movies.category');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// login
Route::get('/login',
            'App\Http\controllers\listeMediasController@afficherLogin')->name('afficherlogin');

Route::post('/login',
'App\Http\controllers\listeMediasController@postLogin')->name('login');

// register
Route::get('/register',
            'App\Http\controllers\listeMediasController@afficherRegister')->name('afficherregister');

Route::post('/register',
            'App\Http\controllers\listeMediasController@postRegister')->name('register');

// Deconnexion
Route::post('/deconnexion',
'App\Http\controllers\listeMediasController@destroy')->name('deconnexion');

// Route::middleware('auth')->group(function () {
//     Route::get('/playlist', function ()    {
//         // Réservé aux utilisateurs authentifiés
//     });
//     Route::get('/monprofil', function () {
//         // Réservé aux utilisateurs authentifiés
//     });
//     Route::post('/deconnexion','App\Http\controllers\listeMediasController@destroy')->name('deconnexion');
// });

// Route::middleware('guest')->group(function () {
//     Route::get('/login', function ()    {
//         // Réservé aux utilisateurs authentifiés
//     });
// });

