<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function(){
    // return View::make('welcome');
   return view('welcome');
});

Route::get('/profile', function(){  
    dd(View::exists('user.profile'));
    //return View::first(['user.profile', 'user.profile_new']);
    return view('user.profile');
});