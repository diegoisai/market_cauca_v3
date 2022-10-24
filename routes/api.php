<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users',[ApiController::class, 'users']);
Route::get('/categorias',[CategoriaController::class, 'index']);
Route::get('/facturas ',[FacturaController::class, 'index']);
//Route::post('/login',[ApiController::class, 'login']);
Route::post('/add',[ApiController::class, 'add']);

//Rutas Productos
Route::get('/productos',[ProductoController::class, 'index']);
Route::post('/productos/add',[ProductoController::class, 'store']);
Route::put('/update',[ProductoController::class, 'update']);
Route::delete('/delete',[ProductoController::class, 'destroy']);
