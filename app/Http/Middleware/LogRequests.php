<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 

class LogRequests
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
        // Log the request details
        $logMessage = sprintf(
            "[%s] %s %s\n",
            now()->toDateTimeString(),  // Timestamp
            $request->method(),         // HTTP method
            $request->fullUrl()         // Full URL
        );

        // Append to log.txt file in the storage/logs directory
        file_put_contents(storage_path('logs/log.txt'), $logMessage, FILE_APPEND);

        return $next($request);
    }
}
