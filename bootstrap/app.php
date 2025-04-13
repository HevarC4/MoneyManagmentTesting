<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
=======
        // Define rate limiters
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
>>>>>>> 1e70163d92896a1e26c4bfd5364403e7bc9ad9bb
