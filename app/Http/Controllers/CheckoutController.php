<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $token)
    {
        return $this->getUser($token);
    }

    private function getUser($token)
    {
        return User::find($token);
    }
}
