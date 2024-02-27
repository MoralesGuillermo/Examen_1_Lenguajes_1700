<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosController;
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
    return view('welcome');
});

Route::get('/inicio', [TipoAsientoController::class, 'inicio'])->name('aerolinea.inicio');

Route::get('/tipoAsiento', [TipoAsientoController::class, 'tipoAsientos'])->name('aerolinea.tipoAsientos');

Route::get('/agregarTipoAsiento', [TipoAsientoController::class, 'agregar'])->name('aerolinea.agregarTipoAsientos');

Route::get('/createTipoAsiento', [TipoAsientoController::class, 'create'])->name('aerolinea.createTipoAsiento');

Route::get('/eliminarTipoAsiento/{idTipoAsiento}', [TipoAsientoController::class, 'eliminar'])->name('aerolinea.eliminarTipoAsiento');

Route::get('/editarTipoAsiento/{idTipoAsiento}', [TipoAsientoController::class, 'editar'])->name('aerolinea.editarTipoAsiento');

Route::get('/editTipoAsiento', [TipoAsientoController::class, 'edit'])->name('aerolinea.editTipoAsiento');

Route::get('/vuelos', [VuelosController::class, 'vuelos'])->name('aerolinea.vuelos');

Route::get('/agregarVuelos', [VuelosController::class, 'agregar'])->name('aerolinea.agregarVuelo');

Route::get('/createFlight', [VuelosController::class, 'create'])->name('aerolinea.createFlight');

Route::get('/eliminarVuelo/{numeroVuelo}', [VuelosController::class, 'eliminar'])->name('aerolinea.eliminarVuelo');




