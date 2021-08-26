<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('admin', function(){
    dd('admin');
})->middleware('checkToken:admin');