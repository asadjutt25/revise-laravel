<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class age24check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        if($request->age<18){
            die('you are is eligle for this side use this link for access http://127.0.0.1:8000/home24?country=pak&age=26');
        }
        return $next($request);
    }
}
