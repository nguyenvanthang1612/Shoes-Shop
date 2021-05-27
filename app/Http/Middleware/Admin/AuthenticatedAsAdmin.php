<?php

namespace App\Http\Middleware\Admin;

use App\Constants;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedAsAdmin
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
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        if (Auth::check() && Auth::user()->role == Constants::ROLE['USER']) {
            return redirect()->route('frontend.index');
        }
        return $next($request);
    }
}
