<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class VerifyVerificationCode
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
        $user = Auth::user();

        if ($user && $user->verification_code) {

            if (Carbon::parse($user['updated_at'])->addMinutes(1)->isPast()) {
                // Verification code has expired, reset it
                User::find($user->id)->update(['verification_code' => null]);
                
                Auth::logout();
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                
                return redirect('/login')->with('loginError', 'Kode verifikasi telah kadaluarsa. Silakan mencoba lagi.');
            }

            return redirect()->route('login');
        }
    
        return $next($request);
    }
}
