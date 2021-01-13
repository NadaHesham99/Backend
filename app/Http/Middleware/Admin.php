<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;

class Admin
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
        if(!Auth::check())
        {

           return Abort(404);
        }
        elseif (auth()->user()->role < 1 ) {
            return Abort(404);
        }
        return $next($request);
    }
}
