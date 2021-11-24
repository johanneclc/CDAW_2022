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
// TP LARAVEL
// // Premiere facon
// Route::get('/', function () {
//     return view('accueil');
// });

// // Deuxieme facon
// // Route::get('/', function () {
// //     echo "<h2> Hello World! </h2>";
// // });

// Route::get('/user/{prenom}/{nom}', function ($prenom,$nom) {
//     echo "<h2> Hello ". $prenom ." ". $nom ."</h2>";
// });

// Route::get('/title/{title}', function ($title) {
//     echo "<h2>". $title ."</h2>";
// });

// Route::get('/template', function () {
//     return view('template');
// });

// Route::get('/listeMedias', function () {
//     return view('listeMedias');
// });

// Route::get('/listeMediasController/{params}', 'App\Http\controllers\listeMediasController@afficherListeMediasParams');
// Route::get('/categoriesController', 'App\Http\controllers\categoriesController@afficherCategories');

// Route::get('/html', function () {
//     echo "<!doctype html>
//     <html lang='fr'>
//       <head>
//           <meta charset='UTF-8'>
//           <title>Mauvaise façon</title>
//       </head>
//       <body>
//           <p>Le fichier risque d'être longggggg</p>
//       </body>
//     </html>";
// });

//AU PROPRE POUR NOTRE SITE

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

// login
Route::get('/login',
            'App\Http\controllers\listeMediasController@afficherLogin')->name('afficherlogin');

Route::post('/login',
'App\Http\controllers\listeMediasController@postLogin')->name('login');

// register
Route::get('/register',
            'App\Http\controllers\listeMediasController@afficherRegister');