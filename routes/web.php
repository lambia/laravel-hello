<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $dati = config("data.home");
    return view('home', $dati);
})->name("home");

Route::get('/about-us', function () {
    return view('about', config("data.about"));
})->name("informazioni");
