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
Route::get('/{prenom}/{nom}', function($prenom, $nom){
    echo $prenom;
    echo $nom;
});

Route::get('/test', function() {
    echo( "toto");
});

Route::get('/', function() {
    // echo "Hello world!";
    // return view('welcome');
    return view('helloworld');
});
?>