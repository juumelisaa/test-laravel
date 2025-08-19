<?php

namespace App\Http\Middleware;

use Inertia\Inertia;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $isLogin = session('token') ? true : false;
        Inertia::share([
            'isLogin' => $isLogin
        ]);
        return $next($request);
    }
}
