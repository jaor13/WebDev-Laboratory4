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
        // Let the request proceed to the next middleware or controller
        return $next($request);
    }

    /**
     * Perform any final actions after the response has been sent.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response $response
     * @return void
     */
    public function terminate(Request $request, $response)
    {
        // Log the request details after response has been sent
        $logMessage = sprintf(
            "[%s] %s %s\n",
            now()->toDateTimeString(),  // Timestamp
            $request->method(),         // HTTP method
            $request->fullUrl()         // Full URL
        );

        // Append to log.txt file in the storage/logs directory
        file_put_contents(storage_path('logs/log.txt'), $logMessage, FILE_APPEND);
    }
}
