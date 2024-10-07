<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $minAge
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $minAge)
    {
        // Retrieve age from session
        $age = session('age');

        // Check if age is set and meets the minimum requirement
        if ($age === null || $age < $minAge) {
            return redirect()->route('access-denied'); // Redirect to "Access Denied" page
        }

        return $next($request); // Proceed with the request
    }
}

