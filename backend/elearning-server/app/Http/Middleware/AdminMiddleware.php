<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{


    public function handle(Request $request, Closure $next)
    {

        $user = Auth::user();

        if ($user->role == 'admin') {
            return $next($request);
        }

        return redirect(route("not-found"));
    }
}
