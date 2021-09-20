<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $view = view(['user' => 'Jhon Snow']);
        return $view;
    }
}
