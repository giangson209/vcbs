<?php

namespace App\Http\Middleware;

use Closure;

class AddCustomHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        $response->header('X-Frame-Options', 'SAMEORIGIN');
        $response->header('X-Xss-Protection', '1; mode=block');
        $response->header('X-Content-Type-Options', 'nosniff');
        // $response->header('Referrer-Policy', 'no-referrer');
        $response->header('X-Permitted-Cross-Domain-Policies', 'none');
        $response->header('Pragma', 'no-cache');

        return $response;
    }
}
