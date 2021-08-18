<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::middleware('userAgent')->group(function(){

    Route::get('users', function(App\Models\User $user){
        dd('users');
    })->middleware('users');
    
    Route::get('services', function(App\Models\User $user){
        dd('services');
    })->middleware('services');

    Route::get('posts', function(App\Models\User $user){
        dd('posts');
    })->withoutMiddleware('userAgent');
});
 
