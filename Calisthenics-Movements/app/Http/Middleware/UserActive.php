<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::user()->active == 0) {
            Auth::logout();
            return redirect('login');
        }

        if (!Auth::user()->username) {
            return redirect()->route('update.user');
        }

        return $next($request);
    }
}
