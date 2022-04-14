<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $addHttpCookie = true;

    protected $except = [
        'http://127.0.0.1:8000/blog/create',
        'http://127.0.0.1:8000/blog/edit/*',
        'http://127.0.0.1:8000/blog/delete/*',
        'http://127.0.0.1:8000/portfolio/create',
        'http://127.0.0.1:8000/portfolio/edit/*',
        'http://127.0.0.1:8000/portfolio/delete/*',
    ];
}
