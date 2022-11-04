<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Uso de controladores con api
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\OrdenController;
use App\Http\Controllers\Api\FacturaController;
use App\Http\Controllers\Api\OrdenDetailsController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Rutas Productos
Route::get('/productos',[ProductoController::class, 'index']);
Route::post('/productos/add',[ProductoController::class, 'store']);
Route::put('/actualizar/producto',[ProductoController::class, 'update']);
Route::delete('/delete/{id}',[ProductoController::class, 'destroy']);

Route::apiResource('v1/productos',ProductoController::class)
      ->only(['index','show','destroy']);

//Rutas Categorias
Route::get('/categorias',[CategoriaController::class, 'index']);
Route::post('/categorias/add',[CategoriaController::class, 'store']);
Route::put('/actualizar/categoria',[CategoriaController::class, 'update']);
Route::delete('/delete/{id}',[CategoriaController::class, 'destroy']);

Route::apiResource('v1/categorias',CategoriaController::class)
      ->only(['index','show']);

//Rutas Ordenes
Route::get('/ordenes',[OrdenController::class, 'index']);
Route::post('/ordenes/add',[OrdenController::class, 'store']);
Route::put('/actualizar/orden',[OrdenController::class, 'update']);
Route::delete('/delete/{id}',[OrdenController::class, 'destroy']);

//Rutas Facturas
Route::get('/facturas',[FacturaController::class, 'index']);
Route::post('/facturas/add',[FacturaController::class, 'store']);
Route::put('/actualizar/factura',[FacturaController::class, 'update']);
Route::delete('/delete/{id}',[FacturaController::class, 'destroy']);

//Rutas Ordenes Detalles
Route::get('/ord-detalles',[OrdenDetailsController::class, 'index']);
Route::post('/ord-detalles/add',[OrdenDetailsController::class, 'store']);
Route::put('/actualizar/detalles',[OrdenDetailsController::class, 'update']);
Route::delete('/delete/{id}',[OrdenDetailsController::class, 'destroy']);



// OTRAS RUTAS
// Route::get('/users',[ApiController::class, 'users']);
// Route::get('/categorias',[CategoriaController::class, 'index']);
// Route::get('/facturas ',[FacturaController::class, 'index']);
// Route::post('/login',[ApiController::class, 'login']);
// Route::post('/add',[ApiController::class, 'add']);