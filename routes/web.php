<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class,'index']);

Route::get('/calculadora', [CalculadoraController::class, 'index'])->name('calculadora');

Route::get('/imagenes',[ImagenesController::class,'index'])->name('imagenes');

Route::get('/imagenesDetalle/{id}', [ImagenesController::class, 'show'])->name('detallesimagen');
