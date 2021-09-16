<?php

use Illuminate\Support\Facades\Route;

Route::get('user/{user}', function(Illuminate\Http\Request $request){
    //dd($request->input('token'));
    //dd($request->input('curso', 'Laravel'));
    //dd($request->input('product.2.versao'));
    //dd($request->input());
    //dd($request->query());
    //dd($request->query('curso', 'laravel'));
    //dd($request->token);
    //dd($request->only('product', 'token'));
    //dd($request->only('token'));
    dd($request->except('product'));
})->name('user');