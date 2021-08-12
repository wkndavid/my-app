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

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('', function(){
        return view('welcome');
    })->name('users');

    Route::get('{id}', function($id){
        return 'Hello Wolrd ' .  $id;
    })->name('user');
});