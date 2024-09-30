<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController; // Importa el controlador de productos
use App\Http\Controllers\AuthController; // Importa el controlador de autenticación

// Rutas de autenticación
Auth::routes();

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta del home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta de inventario
Route::get('/inventario', [ProductoController::class, 'index'])->name('inventario.index');

// Rutas personalizadas para inicio y cierre de sesión
Route::get('login', function () {
    return view('auth.login'); // Asegúrate de que esta vista existe
})->name('login');

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
