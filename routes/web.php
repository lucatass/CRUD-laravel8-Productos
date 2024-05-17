<?php

use App\Http\Controllers\API\ProductoController;

use Illuminate\Support\Facades\Route;



Route::get('/',[ProductoController::class,'index'])->name('productos.index');
Route::get('/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/store',[ProductoController::class,'store'])->name('productos.store');
Route::get('/edit/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/update/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::get('/show/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::delete('/destroy/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');

 