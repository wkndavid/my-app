<?php

use Illuminate\Support\Facades\Route;

//Route::redirect('rota-a', 'rota-b', 301);
//Route::permanentRedirect('rota-a', 'rota-b');

//Route::get('rota-a', function(){
    // lógica cabulosa
    //return redirect()->route('rotab');
//});

//Route::get('rota-b', function(){
    //return 'ROTA B';
//})->name('rotab');
Route::get('test', function(){
    return 'test';
})->middleware('signed');

Route::middleware('signed')->group(function(){
    Route::get('user', function(){
        return 'Hello World';
    })->name('users');

    Route::get('user/{id}', function($id){
        return 'Hello Wolrd ' .  $id;
    })->name('user');
});


