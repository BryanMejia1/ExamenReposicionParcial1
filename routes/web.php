<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedorController;

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

Route::get('/', function () {
    return view('inicio');
})->name('principal');

Route::get('/Empleados', [EmpleadosController::class, 'principal'])->name('empleados.principal');

Route::get('/Empleados/agregarEmpleado', [EmpleadosController::class, 'agregarEmpleado'])->name('empleados.agregar');

Route::post('/Empleados/guardarEmpleado', [EmpleadosController::class, 'guardarEmpleado'])->name('empleados.guardar');

Route::get('/Productos', [ProductosController::class, 'principal'])->name('productos.principal');

Route::get('/Productos/agregarProducto', [ProductosController::class, 'agregarProducto'])->name('productos.agregar');

Route::post('/Productos/guardarProducto', [ProductosController::class, 'guardarProducto'])->name('productos.guardar');

Route::get('/Proveedores', [ProveedorController::class, 'principal'])->name('proveedores.principal');

Route::get('/Proveedores/agregarProveedor', [ProveedorController::class, 'agregarProveedor'])->name('proveedores.agregar');

Route::post('/Proveedores/guardarProveedor', [ProveedorController::class, 'guardarProveedor'])->name('proveedores.guardar');