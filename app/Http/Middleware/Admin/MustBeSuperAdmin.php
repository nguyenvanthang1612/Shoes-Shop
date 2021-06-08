<?php

namespace App\Http\Middleware\Admin;

use App\Constants;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MustBeSuperAdmin
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
        $role = Auth::user()->role;
        
        if ($role == Constants::ROLE['SUPER_ADMIN'])
        {
            return $next($request);
        }
        return abort(403);
    }
}
