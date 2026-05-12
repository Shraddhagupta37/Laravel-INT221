<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // This is where we can register global middleware that will be applied to all routes.
        // $middleware->append([
        //     'age' => AgeCheck::class, 
        // ]);

        // This allows us to use 'age' as an alias for the AgeCheck middleware in our routes, i.e. route middleware.
        $middleware->alias([
            'age' => AgeCheck::class, 
        ]); 
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
