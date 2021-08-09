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
Route::get('token/{token}', function($token){
    return $token;
})->whereUuid('token');


Route::get('/user/{id}/{name}', function($id =null, $name=null){
    return 'User '. $id. '-' .$name;
})->where([
    'id'=>'[0-9]+',
    'name'=>'[A-Za-z]+'
]);

Route::get('/', function(){
    return view('welcome');
});