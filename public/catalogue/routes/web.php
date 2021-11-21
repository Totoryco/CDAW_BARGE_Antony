<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeMediasController;
use App\Http\Controllers\ShowsFilmsController;

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
Route::get('/films', 'App\Http\Controllers\ShowsFilmsController@showAllFilms')->name('films');

Route::get('/addFilm', 'App\Http\Controllers\ShowsFilmsController@addFilmForm')->name('addFilmForm');
Route::post('/addFilm', 'App\Http\Controllers\ShowsFilmsController@addFilm')->name('addFilm');

Route::get('/addFilm/{film}', 'App\Http\Controllers\ShowsFilmsController@updateFilmForm')->name('updateFilmForm');
Route::put('/addFilm/{film}', 'App\Http\Controllers\ShowsFilmsController@updateFilm')->name('updateFilm');

/*
Route::get('/films', 'App\Http\Controllers\listeMediasController@helloWorld')->name('films');
Route::get('/films/{idFilm}', 'App\Http\Controllers\listeMediasController@helloBanane')->name('filmsid');

Route::get('/{prenom}/{nom}', function($prenom, $nom){
    echo $prenom;echo '3';
    echo $nom;
});

Route::get('/template', function() {
    return view('template');
});

Route::get('/{title}', function($title, $id) {
    return $title;
})->where(['title' => '[a-z]+']);

Route::get('/', function() {
    echo "Liste des films";
})->name('listeFilms');

Route::get('/', function() {
    // echo "Hello world!";
    // return view('welcome');
    return view('cardTemplate');
});
*/
?>
