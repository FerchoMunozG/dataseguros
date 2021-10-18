<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Partner
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
        $user = Auth::user();
        foreach ($user->roles as $role) {
            if ($role->title != 'Partner' || $role->id != 3) {
                return redirect('login');
            }
        }
        return $next($request);
    }
}
