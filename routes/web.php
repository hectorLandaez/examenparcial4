<?php

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

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\detalleventaController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\VentaController;

// Rutas para el controlador de clientes
Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

// Rutas para el controlador de ventas
Route::get('/ventas', [VentaController::class, 'index']);
Route::post('/ventas', [VentaController::class, 'store']);
Route::get('/ventas/{id}', [VentaController::class, 'show']);
Route::put('/ventas/{id}', [VentaController::class, 'update']);
Route::delete('/ventas/{id}', [VentaController::class, 'destroy']);


// Rutas para el controlador de articulos
Route::get('/articulo', [ArticuloController::class, 'index']);
Route::post('/articulo', [ArticuloController::class, 'store']);
Route::get('/articulo/{id}', [ArticuloController::class, 'show']);
Route::put('/articulo/{id}', [ArticuloController::class, 'update']);
Route::delete('/articulo/{id}', [ArticuloController::class, 'destroy']);

// Rutas para el controlador de compras
Route::get('/compra', [CompraController::class, 'index']);
Route::post('/compra', [CompraController::class, 'store']);
Route::get('/compra/{id}', [CompraController::class, 'show']);
Route::put('/compra/{id}', [CompraController::class, 'update']);
Route::delete('/compra/{id}', [CompraController::class, 'destroy']);

// Rutas para el controlador de detalle_venta
Route::get('/detalle_venta', [detalleventaController::class, 'index']);
Route::post('/detalle_venta', [detalleventaController::class, 'store']);
Route::get('/detalle_venta/{id}', [detalleventaController::class, 'show']);
Route::put('/detalle_venta/{id}', [detalleventaController::class, 'update']);
Route::delete('/detalle_venta/{id}', [detalleventaController::class, 'destroy']);


// Rutas para el controlador de Trabajadores
Route::get('/Trabajador', [TrabajadorController::class, 'index']);
Route::post('/Trabajador', [TrabajadorController::class, 'store']);
Route::get('/Trabajador/{id}', [TrabajadorController::class, 'show']);
Route::put('/Trabajador/{id}', [TrabajadorController::class, 'update']);
Route::delete('/Trabajador/{id}', [TrabajadorController::class, 'destroy']);

