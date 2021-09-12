<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

//users/{user}/comments
//users/{user}/comments/{comment}

Route::resource('users.comments', UserController::class)->shallow();