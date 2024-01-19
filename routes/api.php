<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/recursos', [UserController::class, 'index']);
Route::get('/recursos/{id}', [UserController::class, 'show']);
Route::post('/recursos', [UserController::class, 'store']);
Route::put('/recursos/{id}', [UserController::class, 'update']);
Route::delete('/recursos/{id}', [UserController::class, 'destroy']);
Route::get('/prueba', [UserController::class, 'index']); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

