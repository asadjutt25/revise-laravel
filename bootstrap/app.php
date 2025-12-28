<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\age23check;
use App\Http\Middleware\age24check;
use App\Http\Middleware\country24check;
use App\Http\Middleware\country24checkcheck;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
      $middleware->append(age23check ::class); 
      $middleware->appendToGroup('check1',[age24check::class,country24check::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
