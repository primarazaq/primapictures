<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class BlockFailedLoginAttempts
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
        $ipAddress = $request->ip();

        $loginAttempt = 7; // Jumlah upaya login gagal maksimum sebelum memblokir
        $attemptsKey = 'login_attempts_' . $ipAddress;
        if (Cache::has($attemptsKey) && Cache::get($attemptsKey) >= $loginAttempt) {
            Session::flash('blockedMessage', 'Too many failed login attempts. Your IP address is blocked.');
            return redirect('/404');
        }
        return $next($request);
    }
}
