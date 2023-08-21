<?php

use App\Http\Controllers\Seguimiento\CondicionController;
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
})->name('home');

//Route::get('/seguimiento', [CondicionController::class, 'index'])->name('seguimiento.control.mascotas');

Route::post('/guardar/seguimiento-mascota', [CondicionController::class, 'store'])->name('guardar.seguimiento.mascotas');

Route::get('/guardar/{idMascota}/seguimiento-mascota/{idCondicion?}', [CondicionController::class, 'index'])->name('seguimiento.mascotas.index');

Route::get('/mascota/{idMascota}/seguimiento/controles', [CondicionController::class, 'consulta'])->name('seguimiento.mascotas.control');

Route::get('/home/{idUsuario}', [CondicionController::class, 'mostarMascotas'])->name('mostrar.mascotas');

//Route::get('/home/{idMascota}', function () {
  //  return view('Home');})->name('inicio');
