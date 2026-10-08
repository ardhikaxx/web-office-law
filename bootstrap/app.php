<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();

// Shared hosting split-folder: code di /home/user/office-law,
// docroot di /home/user/public_html. Arahkan public_path() ke
// public_html agar file_exists()/asset konsisten.
$publicHtml = dirname(__DIR__).'/../public_html';
if (is_dir($publicHtml)) {
    $app->usePublicPath($publicHtml);
}

return $app;
