<?php

use Illuminate\Support\Facades\Route;


Route::get('/user/{user}', function(App\Models\User $user){
    dd($user);
});