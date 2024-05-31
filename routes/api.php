<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('users', Controllers\Api\UserController::class);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [Controllers\AuthController::class, 'logout']);
    Route::get('/profile', [Controllers\AuthController::class, 'profile']);
});
Route::post('register', [Controllers\AuthController::class, 'register']);
Route::post('login', [Controllers\AuthController::class, 'login']);
