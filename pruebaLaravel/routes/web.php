<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\clienteController;
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

/* Route::view('/component','componentes')->name('rutaComponentes');  */

// Rutas con controlador vistas
Route::get('/', [ControladorVista::class, 'home'])->name('rutaInicio');
/*  Route::get('/form', [ControladorVista::class, 'formulario'])->name('rutaform'); */
/* Route::get('/consultar', [ControladorVista::class, 'consulta'])->name('rutaClientes'); */

/* Route::post('/enviarCliente', [ControladorVista::class, 'procesarCliente'])->name('rutaEnviar');
 */
/* rutas para clienteController */
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');

Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaClientes');

// Nuevas rutas para funcionalidad de actualización y eliminación
Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('cliente.edit'); //cargar el formulario de edicion
Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('cliente.update'); //  actualizar el cliente
Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('cliente.destroy'); //  eliminar un cliente