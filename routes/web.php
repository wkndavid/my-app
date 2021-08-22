<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function(){
    return view('welcome');
});

Route::get('admin', function(App\Models\User $user){
    dd('admin');
})->middleware('checkToken', 'userAgent');

Route::middleware(['myApp'])->group(function(){

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
 
=======
//Route::redirect('rota-a','rota-b', 301); 
//Route::permanentRedirect('rota-b', 'rota-b');

//Route::get('rota-a', function(){
//Lógica cabulosa
//return redirect()->route('rotab');
//

//Route::get('rota-b', function(){
//return 'ROTA B';
//name('rotab');

//Route::get('users', function (){
//return 'OLA MUNDO!';
//name('users');


Route::get('/', function(){
    return view('welcome');
});
>>>>>>> b9e7022ebd04489616b79b8d272e819d796e2d9f
