<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/remember-password', [AuthController::class, 'rememberPassword']);

Route::apiResource('products', ProductController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});