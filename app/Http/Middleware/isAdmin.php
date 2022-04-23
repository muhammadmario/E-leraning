<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if( Auth::check() && Auth::user()->role == 1 || Auth::user()->role == 2){
        //     return $next($request);
        // }else{
        //     return abort(403);
        // }

        if (!auth()->check()||auth()->user()->role == 3) {
            return abort(403);
        }

        return $next($request);
    }
}
