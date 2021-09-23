<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function(){
// return View::make('welcome');
   return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);