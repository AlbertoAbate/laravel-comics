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


//homepage
Route::get('/', function () {

    //get comics list
    $comics = config('comics');
    //dd($comics);
                       //usiamo compact per far vedere l'array comics
    return view('home', compact('comics'));
})->name('home');
