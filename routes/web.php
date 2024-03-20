<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
//Auth Routes
Route::get('register', [AuthController::class, 'create'])->name('register');
Route::post('register', [AuthController::class, 'store']);
Route::get('login', [AuthController::class, 'index'])->name('auth.login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

//Users Routes
Route::resource('users', UserController::class);
