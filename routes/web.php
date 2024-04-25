<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('users', [Controllers\UserController::class, 'getIndex']);
Route::get('user/{user}', [Controllers\UserController::class, 'getOne']);

Route::get('/', function () {
    return view('welcome');
});
