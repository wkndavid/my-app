<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{user}', [UserController::class, 'show']);

Route::get('/checkout/{token}', CheckoutController::class);