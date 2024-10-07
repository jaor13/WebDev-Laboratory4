<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequests;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //$middleware->append(CheckAge::class); //CheckAge is registered as aglobal middleware -- this will be run on every request
        $middleware->append(LogRequests::class); // LogRequests is registered as global middleware
        $middleware->alias([
           'check_age' => CheckAge::class, // Alias for CheckAge for route-specific usage
           'log_requests' => LogRequests::class, // Alias for CheckAge for route-specific usage
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
