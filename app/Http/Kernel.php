<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\PreventBackHistory;

class Kernel extends HttpKernel
{
    // ...

    protected $routeMiddleware = [
        // Middleware lainnya...
        'prevent-back-history' => \App\Http\Middleware\PreventBackHistory::class,
    ];

    // ...
}
