<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dd('#Maaarcha!');
    }
    public function show($id)
    {
        dd('Shoow!', $id);        
    }
}