<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'manager')
        {
            return $next($request);
        } 
        elseif (auth()->user()->role == 'karyawan')
        {
            abort(403, 'You do not have permission to access this page');
        } 
        elseif (auth()->user()->role == 'customer')
        {
            abort(403, 'You do not have permission to access this page');
        }
    }
}
