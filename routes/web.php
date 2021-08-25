<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('admin', function(App\Models\User $user){
    dd('admin');
})->middleware('checkToken');