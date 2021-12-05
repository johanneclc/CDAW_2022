<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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
            'App\Http\controllers\listeMediasController@afficherAccueil')->name('accueil');

Route::get('/films',
            'App\Http\controllers\MediasController@afficherFilms')->name('films');
Route::get('/series',
            'App\Http\controllers\MediasController@afficherSeries')->name('series');
Route::get('/animes',
            'App\Http\controllers\MediasController@afficherAnimes')->name('animes');

// detailfilm
Route::get('/films/{media}','App\Http\controllers\MediasController@detailfilm')->name('film');


// Playlists
Route::get('/playlists',
            'App\Http\controllers\PlaylistController@afficherPlaylists')->name('playlists');

Route::get('/playlists/{playlist}',
            'App\Http\controllers\PlaylistController@afficherPlaylist')->name('playlist');

Route::post('/playlistss',
            'App\Http\controllers\PlaylistController@postPlaylists')->name('playlistss');

// Profil Utilisateur
Route::get('/mon_profil', 'App\Http\controllers\userController@afficherMonProfil')->name('mon_profil');
Route::put('/modifier_profil','App\Http\controllers\userController@update')->name('modifier_profil');

// Admin gestion utilisateurs
Route::resource('/users', UserController::class);
Route::put('/changer_role/{user}','App\Http\controllers\UserController@changer_role')->name('changer_role');

// Adin gestion medias
Route::resource('/medias', MediasController::class)->middleware('auth');

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
Route::get('/deconnexion',
'App\Http\controllers\listeMediasController@destroy')->name('deconnexion');

Route::post('/movies/{medias:id}/cast_store', [MediasController::class, 'movie_cast_store'])->name('movie_cast_store');


Route::resource('casts', CastController::class);
Route::resource('movies.comments', CommentController::class)->shallow();
Route::post('/movies/{media}/comments',
            'App\Http\controllers\CommentController@store')->name('commentaire');

//like

Route::get('/addLike','App\Http\Controllers\CommentController@addLike');

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

