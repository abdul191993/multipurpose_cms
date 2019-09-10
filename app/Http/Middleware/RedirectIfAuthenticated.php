<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->hasRole('user')) {
            return redirect('/home');
        }elseif (Auth::guard($guard)->check() && Auth::user()->hasRole('superadmin')) {
            return redirect()->route('superadmin.home');
        }
        elseif (Auth::guard($guard)->check() && Auth::user()->hasRole('admin')) {
            return redirect()->route('admin.home');
        }

        return $next($request);
    }
}
