<?php
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ComunidadesController;
use Illuminate\Support\Facades\Route;


//ruta para el inicio
Route::get('/',[PersonasController::class,'index'])->name('personas.index');

//ruta para crear usuarios
Route::get('/create',[PersonasController::class,'create'])->name('personas.create');

//ruta para editar usuarios
Route::get('/edit/{id}',[PersonasController::class,'edit'])->name('personas.edit');

//ruta para guardar la edicion de datos 
Route::get('/update/{id}',[PersonasController::class,'update'])->name('personas.update');

//ruta para mostrar usuarios
Route::get('/show',[PersonasController::class,'show'])->name('personas.show');

//ruta para eliminar 
Route::get('/destroy/{id}',[PersonasController::class,'destroy'])->name('personas.destroy');

//ruta donde se elimina 
Route::get('/delete/{id}',[PersonasController::class,'delete'])->name('personas.delete');
//ruta para guardar en la base de datos
Route::post('/store',[PersonasController::class,'store'])->name('personas.store');

//ruta para mostrar cantidad de personas dentro de una comunidad
Route::get('/showInfo/{id}',[PersonasController::class,'showInfo'])->name('personas.showInfo');

//////////////////////////////////////////

//Rutas para gestion de comunidades

//ruta para crear comunidades
Route::get('/created',[ComunidadesController::class,'created'])->name('comunidades.created');
//ruta para guardar en la base de datos
Route::post('/stored',[ComunidadesController::class,'stored'])->name('comunidades.stored');

//ruta para mostrar usuarios
Route::get('/see',[ComunidadesController::class,'see'])->name('comunidades.see');

//ruta para editar usuarios
Route::get('/edited/{id}',[ComunidadesController::class,'edited'])->name('comunidades.edited');

//ruta para guardar la edicion de datos 
Route::get('/updated/{id}',[ComunidadesController::class,'updated'])->name('comunidades.updated');


//ruta visualizar un dato a eliminar
Route::get('/deleted/{id}',[ComunidadesController::class,'deleted'])->name('comunidades.deleted');

//ruta donde se elimina
Route::get('/remove/{id}',[ComunidadesController::class,'remove'])->name('comunidades.remove');

