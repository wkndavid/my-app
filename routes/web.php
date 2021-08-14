<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(Illuminate\Http\Request $request){
    dump($request);
    //dd($request);
    //return $request;        
});