<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //chack users auth
        if (auth()->check()) {
          //chek if users role is admin
          if (auth()->user()->role === 'Admin') {
                return $next($request);
            }
        }
        abort(403, 'Unauthorized');
    }
}
