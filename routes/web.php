<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarioController;

Route::resource('productos', ProductoController::class);

Route::get('/', [ProductoController::class, 'home'])->name('home');

Route::post('/guardar_producto', [ProductoController::class, 'guardarProducto'])->name('guardar_producto');

Route::get('/ver_productos', [ProductoController::class, 'verProductos'])->name('productos.ver');



Route::delete('/eliminar_producto/{id}', [ProductoController::class, 'eliminarProducto'])->name('eliminar_producto');



Route::get('/crear_producto', [ProductoController::class, 'crear'])->name('productos.crear');


Route::get('/editar_producto/{id}', [ProductoController::class, 'editarProducto'])->name('editar_producto');

Route::put('/actualizar_producto/{id}', [ProductoController::class, 'actualizarProducto'])->name('actualizar_producto');




//email

Route::post('/login', [AuthController::class, 'login']);



//inventario
Route::get('inventario/{id}/editar', [InventarioController::class, 'showForm'])->name('inventario.form');
Route::post('inventario/{id}/actualizar', [InventarioController::class, 'updateInventory'])->name('inventario.update');