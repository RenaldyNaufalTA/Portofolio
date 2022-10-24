<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (auth()->guest() || !auth()->user()->role === 3) {
        //     return redirect()->back();
        // }
        // return $next($request);

        if (Auth::user() &&  Auth::user()->role == 3) {
            return $next($request);
        }
        return redirect()->back();
    }
}