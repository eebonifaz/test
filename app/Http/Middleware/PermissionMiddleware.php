<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */ 
    public function handle(Request $request, Closure $next, ...$permission )
    { 
        if( ! $request->user()->hasPermissions($permission) ){
            abort(403);
        }

        return $next($request);
    }
}
