<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $view = view(['user.index']);

        $view->with(['user' => 'Alahj Jah' ]);

        $view->with(['user2' => 'Oniti Waa' ]);

        $view->with(['userAdmin' => 'David jess']);
        
        return $view;
    }    
}