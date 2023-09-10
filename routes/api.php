<?php

use App\Http\Controllers\GradController;
use App\Http\Controllers\RubrikaController;
use App\Http\Controllers\UcenikController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// pitanja
Route::post('/pitanja/dodaj', 'App\Http\Controllers\PitanjeController@store');
Route::post('/pitanja/uredi/{id}', 'App\Http\Controllers\PitanjeController@edit');
Route::get('/pitanja/dohvati', 'App\Http\Controllers\PitanjeController@index');
Route::get('/pitanja/izbrisi/{id}', 'App\Http\Controllers\PitanjeController@destroy');


// Učenici
Route::post('/ucenici/dodaj', 'App\Http\Controllers\UcenikController@store');
Route::post('/ucenici/uredi/{id}', 'App\Http\Controllers\UcenikController@edit');
Route::get('/ucenici/dohvati', 'App\Http\Controllers\UcenikController@index');
Route::get('/ucenici/izbrisi/{id}', 'App\Http\Controllers\UcenikController@destroy');


// Nastavnici
Route::post('/nastavnik/dodaj', 'App\Http\Controllers\NastavnikController@store');
Route::post('/nastavnik/uredi/{id}', 'App\Http\Controllers\NastavnikController@edit');
Route::get('/nastavnik/dohvati', 'App\Http\Controllers\NastavnikController@index');
Route::get('/nastavnik/izbrisi/{id}', 'App\Http\Controllers\NastavnikController@destroy');


/*
Route::get('/prva_ruta', function() {
    return 'Dobar dan.';
});

Route::get('/kvadriraj/{broj}', function($broj) {
    return $broj * $broj;
});

Route::get('/zbroji/{broj1}/{broj2}', function($broj1, $broj2) {
    return $broj1 + $broj2;
});

// localhost:8000/api/pretvori_datum/2020-06-15
Route::get('/pretvori_datum/{datum}', function($datum) {
    \Carbon\Carbon::setLocale('hr');
    return \Carbon\Carbon::parse($datum)->diffForHumans(\Carbon\Carbon::now());
});
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
