<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;

 Route::get('/', function () {
    return view('RegistroP');
});



/* Route::get('/', [PrendaController::class, 'welcome'])->name('rutaprincipal'); */

/* Route::post('/register', [PrendaController::class, 'RegistroP'])->name('rutaregistro'); */ 


Route::get('/register', [PrendaController::class, 'RegistroP'])->name('rutaregister'); 


Route::post('/register', [PrendaController::class, 'procesarRegistro'])->name('rutaregister');