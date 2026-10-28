<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the 'role' parameter is not equal to 'admin'
        if ($request->role !== 'admin') {
            // Redirect the user back to the homepage
            return redirect('/');
        }

        // Otherwise, let the request proceed
        return $next($request);
    }
}