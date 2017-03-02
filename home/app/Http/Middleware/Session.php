<?php

namespace App\Http\Middleware;

use Closure;

class Session
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!session_id())session_start();
        if(!isset($_SESSION['u_id'])){
            return view("login");

        }
        return $next($request);
    }
}
