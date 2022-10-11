<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminInstructorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user->role == 'admin' || $user->role == 'instructor') {
            return $next($request);
        }
        return $next($request);
    }
}
