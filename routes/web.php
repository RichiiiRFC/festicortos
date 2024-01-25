<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libros;
use App\Http\Controllers\cortos;
use App\Http\Controllers\home;

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


Route::get('libros', [libros::class, 'index'])->name('libros');
Route::get('cortos', [cortos::class, 'index'])->name('cortos');
Route::get('detalles/{id}', [cortos::class, 'show'])->name('detalles');
Route::get('home', [home::class, 'index'])->name('home');;

