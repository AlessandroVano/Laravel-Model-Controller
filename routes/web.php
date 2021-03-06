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
 
  // Homepage
Route::get('/', function () {
    return view('Home');
})->name('home');

// Movies
Route::get('/movies', 'MovieController@index')->name('movie');



// Rotta
Route::get('/detail/{id}', 'DetailMovieCOntroller@index')->name('detail-movie');
