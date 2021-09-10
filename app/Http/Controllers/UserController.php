<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
      //$this->middleware('userAgent')->only(['index', 'show']);
      $this->middleware(function(){
          dd('Middleware User');
      })->only('index');
    }

    public function index()
    {
        dd('#Maaarcha!');
    }
    public function show(Request $request, User $user)
    {   
        return $user;
        dd($user);       
    }
}
