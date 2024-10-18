<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/', function () {
    return view('welcome'); 
});


Route::get('/repaso1', [Controlador::class, 'index'])->name('repaso1');


Route::post('/convert', [Controlador::class, 'convert'])->name('convert');
