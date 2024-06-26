<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ServiceListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/services', [ServiceListController::class, 'index']);

Route::get('/pets', [PetController::class, 'index']);
Route::post('/pets', [PetController::class, 'store']);

Route::get('/appointments', [AppointmentController::class, 'index']);

