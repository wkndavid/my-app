<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function(){
        return 'test';
       })->middleware('signed');

Route::middleware('signed')->group(function(){
    Route::get('user', function(){
        return 'Hello World';
    })->name('users');
    Route::get('user/{id}', function($id){
        return 'Hello World' . $id;
    })->name('user');
});

Route::fallback(function(){
    return view('welcome');
});