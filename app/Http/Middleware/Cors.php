<?php

namespace App\Http\Middleware;

use Closure;

class Cors {
    public function handle($request, Closure $next)
    {
        $content = $next($request);
        return ( new Response($content) )->header('Access-Control-Allow-Origin' , '*')
                                           ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
                                           ->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin');
         }
    }
}