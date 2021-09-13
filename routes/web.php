<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Route::get('users/{user:email}', [UserController::class, 'show']);

Route::resource('users', UserController::class)->scoped([
    'user' => 'email',
]);