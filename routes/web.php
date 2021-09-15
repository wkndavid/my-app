<?php

use Illuminate\Support\Facades\Route;

//Route::get('users/{user:email}', [UserController::class, 'show']);
Route::get('user/{user}', function(Illuminate\Http\Request $request){
    //dd($request);

    // dd($request->path());
    // dd($request->url());
    // dd($request->fullUrl());
    // dd($request->fullUrlWithQuery(['curso' => 'Laravel']));
    // dd($request->fullUrlIs('http://127.0.0.1:8000/user?token=abc'));
    // dd($request->is('user/*'));
    // dd($request->routeIs('user'));
    // dd($request->method() === 'GET')
    dd($request->isMethod('get'));
})->name('user');