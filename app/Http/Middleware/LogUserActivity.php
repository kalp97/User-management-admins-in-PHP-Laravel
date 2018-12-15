<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class LogUserActivity
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
        if(Auth::check())
        {
            $expiresAt = Carbon::now()->addMinutes(5);
            Cache::put('is_active'. Auth::user()->id, true, $expiresAt);
        }
        return $next($request);
    }
}
