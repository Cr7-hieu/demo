<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\CheckAdmin as Middleware;
use Illuminate\Http\Request;

class CheckAdmin 
{
    /**
     * Handle an incoming request.
     *
     * @param \\Illuminate\\Http\\Request $request
     * @param \\Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);
    }
}
