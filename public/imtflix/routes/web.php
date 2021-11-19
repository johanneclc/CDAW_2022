<?php

use Illuminate\Support\Facades\Route;

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
// Premiere facon 
Route::get('/', function () {
    return view('accueil');
});

// Deuxieme facon
// Route::get('/', function () {
//     echo "<h2> Hello World! </h2>";
// });

Route::get('/user/{prenom}/{nom}', function ($prenom,$nom) {
    echo "<h2> Hello ". $prenom ." ". $nom ."</h2>";
});

Route::get('/title/{title}', function ($title) {
    echo "<h2>". $title ."</h2>";
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/listeMedias', function () {
    return view('listeMedias');
});

Route::get('/listeMediasController/{params}', 'App\Http\controllers\listeMediasController@afficherListeMediasParams');
Route::get('/categoriesController', 'App\Http\controllers\categoriesController@afficherCategories');

Route::get('/html', function () {
    echo "<!doctype html>
    <html lang='fr'>
      <head>
          <meta charset='UTF-8'>
          <title>Mauvaise façon</title>
      </head>
      <body>
          <p>Le fichier risque d'être longggggg</p>
      </body>
    </html>";
});
