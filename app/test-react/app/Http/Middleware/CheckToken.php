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
        // Example: token from session
        $isLogin = $request->session()->has('token');
        // if (!$request->session()->has('token')) {
        //     return redirect('/'); // redirect to home if no token
        // }
        Inertia::share([
            'isLogin' => $isLogin
        ]);
        return $next($request);
    }
}
