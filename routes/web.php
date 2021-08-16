<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('user', function(App\Models\User $user){
    dd('x');
})->middleware('userAgent');