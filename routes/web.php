<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;  // Importa el controlador de productos

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inventario', [ProductoController::class, 'index'])->name('inventario.index');
