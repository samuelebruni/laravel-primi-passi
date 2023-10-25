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
    $descrizione = 'lorem lorem lorem lorem lorem';
    return view('home', compact('descrizione'));
});

Route::get('/other', function () {
    $titolo = 'questo è il titolo della nuova pagina';
    $descrizione = 'lorem lorem lorem lorem lorem';
    return view('other', compact('titolo', 'descrizione'));
});
