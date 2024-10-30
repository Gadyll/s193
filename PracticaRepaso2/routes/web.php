<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiblioController;

/* Route::get('/', function () {
    return view('principal');
})->name('rutaprincipal'); 

Route::get('/registrar', function () {
    return view('Registro');
})->name('rutaregistro');   */

Route::get('/', [BiblioController::class, 'home'])->name('rutaprincipal');
Route::get('/registrar', [BiblioController::class, 'Registro'])->name('rutaregistro');



Route::post('/registrar', [BiblioController::class, 'procesarFormulario'])->name('rutaregistro');