<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaform');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes'); 
 */

// Route::view('/','inicio')->name('rutaInicio');
// Route::view('/form','formulario')->name('rutaform');
// Route::view('/consultar','clientes')->name('rutaClientes'); 

/* Route::view('/component','componentes')->name('rutaComponentes'); 

// Rutas con controlador
Route::get('/', [ControladorVista::class, 'home'])->name('rutaInicio');
Route::get('/form', [ControladorVista::class, 'formulario'])->name('rutaform');
Route::get('/consultar', [ControladorVista::class, 'consulta'])->name('rutaClientes');

Route::post('/enviarCliente', [ControladorVista::class, 'procesarCliente'])->name('rutaEnviar'); */

Route::get('/', [ClienteController::class, 'home'])->name('rutaInicio');
Route::resource('cliente', ClienteController::class);