<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

//Route::Resource('users', UserController::class)->except('create', 'edit');

Route::apiResources([
    'users' => UserController::class,
    'posts' => UserController::class,
    'checkout' => UserController::class,
]);