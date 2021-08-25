<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role_names)
    {           
        dd($role_names);
        
        //if($request->input('token') !== 'abc'){
        //    return redirect($request) ; 
        //}
        return $next($request);
    }
}
