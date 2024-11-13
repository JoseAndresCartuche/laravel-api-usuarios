<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CargoController;
use App\Http\Controllers\Api\DepartamentoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/users', 'store');
    Route::get('/users/{id}', 'show');
    Route::put('/users/{id}', 'update');
    Route::delete('users/{id}', 'destroy');
});

Route::controller(DepartamentoController::class)->group(function () {
    Route::get('/departamentos', 'index');
    Route::get('/departamentos/{id}', 'show');
});

Route::controller(CargoController::class)->group(function () {
    Route::get('/cargos', 'index');
    Route::get('/cargos/{id}', 'show');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
