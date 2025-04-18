<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        }

        // Redirect ke halaman yang sesuai jika pengguna tidak memiliki role yang sesuai
        return redirect()->route(('login'));
    }                           
}

