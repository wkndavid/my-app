<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAgent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
       // if($request->input('token') !== 'abc'){
         //return redirect('/') ; 
        //}
        dd($request->server('HTTP_USER_AGENT'));
        return $next($request);
    }
}
