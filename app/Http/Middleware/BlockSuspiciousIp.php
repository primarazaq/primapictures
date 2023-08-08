<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlockSuspiciousIp
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

        // Hitung jumlah pesanan dengan IP address yang sama dalam periode waktu 24jam
        $threshold = 10; // Jumlah pesanan maksimum sebelum dianggap mencurigakan
        $period = now()->subDay(); // Ubah periode sesuai dengan kebutuhan Anda

        $suspiciousIpCount = Pesanan::where('ip_address', $ipAddress)
            ->where('created_at', '>=', $period)
            ->count();

        if ($suspiciousIpCount >= $threshold) {
            return redirect('/404')->with('blockedMessage', 'Too many request. Your IP address is blocked to Order for 24 hours.');
        }

        return $next($request);
    }
}
