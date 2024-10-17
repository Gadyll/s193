<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

// Ruta para la página de inicio (portada)
Route::get('/', function () {
    return view('welcome'); // Página de portada con tus datos
});

// Ruta para la vista repaso1
Route::get('/repaso1', [Controlador::class, 'index'])->name('repaso1');

// Ruta para manejar la conversión
Route::post('/convert', [Controlador::class, 'convert'])->name('convert');
