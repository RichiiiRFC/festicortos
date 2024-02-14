<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
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


// Route::get('libros', [libros::class, 'index'])->name('libros');
// Route::get('crearlibros', [libros::class, 'create'])->name('crearlibros');
// Route::get('listarlibros', [libros::class, 'store'])->name('listarlibros');
// Route::get('/modificar/{libro}', [libros::class, 'edit'])->name('modificarLibros');

// Route::get('formulario', function () {
    
//     return view('createlibros');
//     })->name('formulario');

// Route::put('formularioModificar', [libros::class, 'update'])->name('formularioModificar');
// Cuando se accede a esta ruta con metodo delete borra, con get hace show
//Route::delete('/libros/{libro}', [libros::class, 'destroy'])->name('libros.destroy');


//LIBROS


Route::get('/libros/listado', [LibroController::class, 'listado'])->name('libros.listado');
Route::get('/libros/filtro', [LibroController::class, 'filtro'])->name('libros.filtro');
Route::post('/libros/listadofiltro', [LibroController::class, 'resultado'])->name('libros.listadofiltro');
Route::resource('libros', LibroController::class);

//AUTORES

Route::resource('autores', AutorController::class);



// CORTOS (PRÁCTICA PASADA)

Route::get('cortos', [cortos::class, 'index'])->name('cortos');
Route::get('detalles/{id}', [cortos::class, 'show'])->name('detalles');
Route::get('home', [home::class, 'index'])->name('home');