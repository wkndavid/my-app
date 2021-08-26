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
    public function handle(Request $request, Closure $next, ...$roles)
    {     
        foreach ($roles as $role) {
            if (auth()->user()->hasRole($role)){

                return $next($request);   
            }         
        }         
        //if($request->input('token') !== 'abc'){
        //    return redirect($request) ; 
        //}
        return response()->json('Desculpe sem premissão!', 401);
    }
}
