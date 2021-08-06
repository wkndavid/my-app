<?php

use Illuminate\Support\Facades\Route;

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