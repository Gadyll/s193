<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('principal');
})->name('rutaprincipal'); 

Route::get('/registrar', function () {
    return view('Registro');
})->name('rutaegistro'); 

