<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ControladorInventario;


Route::post('/productos', [ProductoController::class, 'guardarProducto'])->name('guardar_producto');


Route::delete('/productos/{id}', [ProductoController::class, 'eliminarProducto'])->name('eliminar_producto');

Route::put('/productos/{id}', [ProductoController::class, 'actualizarProducto'])->name('actualizarProducto');

Route::get('/productos', [ProductoController::class, 'showAll'])->name('showAll');


//inventario

