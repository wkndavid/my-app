<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('users', function(App\Models\User $user){
    dd('users');
});

