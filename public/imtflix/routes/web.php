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
            'App\Http\controllers\MediasController@afficherFilms')->name('films');
Route::get('/series',
            'App\Http\controllers\MediasController@afficherSeries')->name('series');
Route::get('/animes',
            'App\Http\controllers\MediasController@afficherAnimes')->name('animes');

// Profil Utilisateur
Route::get('/mon_profil', 'App\Http\controllers\userController@afficherMonProfil');
Route::put('/modifier_profil','App\Http\controllers\userController@update')->name('modifier_profil');
Route::resource('users', userController::class);

// Admin gestion utilisateurs
Route::resource('gestion_utilisateurs', UserController::class);

// Adin gestion medias
Route::resource('gestion_medias', MediasController::class)->middleware('auth');

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
Route::post('users/deconnexion',
'App\Http\controllers\listeMediasController@destroy')->name('deconnexion');

// detailfilm
Route::get('/detailfilm','App\Http\controllers\MediasController@detailfilm')->name('detailfilm');

Route::post('/movies/{medias:id}/cast_store', [MediasController::class, 'movie_cast_store'])->name('movie_cast_store');


Route::resource('casts', CastController::class);
Route::resource('movies.comments', CommentController::class)->shallow();

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

