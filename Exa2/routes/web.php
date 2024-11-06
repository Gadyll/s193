<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;

Route::get('/', function () {
    return view('RegistroP');
});



/* Route::get('/', [PrendaController::class, 'welcome'])->name('rutaprincipal'); */

Route::post('/registrar', [PrendaController::class, 'procesarFormulario'])->name('rutaregistro');