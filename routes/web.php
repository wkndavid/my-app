<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

Route::resources([
    'users' => UserController::class,
    'posts' => UserController::class,
]);