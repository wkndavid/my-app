<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function(\App\Models\User $user) {
   dd($user);
});

Route::get('/greeting', function () {
    return 'Hello World';
});