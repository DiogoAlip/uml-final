<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AnimalControllerController;
use App\Http\Controllers\CuidadorControllerController;
use App\Http\Controllers\RecintoControllerController;
use App\Http\Controllers\EspecieControllerController;
use App\Http\Controllers\ActividadControllerController;


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
Route::resource('/AnimalController', AnimalControllerController::class);
Route::resource('/CuidadorController', CuidadorControllerController::class);
Route::resource('/RecintoController', RecintoControllerController::class);
Route::resource('/EspecieController', EspecieControllerController::class);
Route::resource('/ActividadController', ActividadControllerController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});
