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

Route::get('/', function () {

    $cards = config('comics');

    return view('pages.home')->with('cards',$cards);
})->name('movies.index'); //mostra tutti i film comics

// Rotta per la pagina about 
Route::get('/about', function() {
    return view('pages.about');
})->name('about.index');

Route::get('/{id}', function($id) {

   $cards = config('comics');
    // se il numero nell'url è più grande della lunghezza dell'array, avremo errore 404
    abort_if(!isset($cards[$id]),404);

    $element = $cards[$id];
    return view('pages.detailPage')->with('card',$element);

    // return 'titolo: '.$cards[$id]['title'];
})->where('id','[0-9]+')->name('movies.show');
 //uso un'espressione regolare per dire che si accettsno solo numeri
 //movies.show è il nome che sta ad indicare il singolo film comics