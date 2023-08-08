<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\VerificationCodeMail;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postLogin(Request $request)
{
    try {
        $ipAddress = $request->ip();
        $attemptsKey = 'login_attempts_' . $ipAddress;

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Reset jumlah upaya login gagal
            Cache::forget($attemptsKey);

            $user = Auth::user();

            // Generate and save verification code
            $verificationCode = mt_rand(100000, 999999);
            $hashedVerificationCode = bcrypt($verificationCode);
            User::find($user->id)->update(['verification_code' => $hashedVerificationCode, 'updated_at' => now()]); // Update verification code

            // Send verification code to user's email
            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

            return redirect()->route('verify.form'); // Redirect to verification form
        } else {
            // Tambahkan atau update jumlah upaya login gagal
            $failedAttempts = Cache::get($attemptsKey, 0);
            Cache::put($attemptsKey, $failedAttempts + 1, now()->addMinutes(1440)); // Blokir selama 1 hari

            return back()->with(
                'loginError', 'Login Gagal! Periksa username dan password anda kembali !');
        }
    } catch (\Exception $e) {
        return back()->withErrors(['loginError' => 'Terjadi kesalahan. Silakan coba lagi.']);
    }
}


    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function verifyForm()
    {
        $user = Auth::user();
        if($user == null){
            return redirect()->route('login');
        } else {
            return view('verify');
        }
        
    }

    public function verify(Request $request)
    {
        try {
            $request->validate([
                'verification_code' => 'required|numeric|digits:6'
            ]);

            $user = Auth::user();

            if ($user->verification_code == null) {
                return redirect()->route('login')->with('loginError', 'Kode verifikasi telah kadaluarsa. Silakan mencoba lagi.');
            } else {
                if (Carbon::parse($user['updated_at'])->addMinutes(1)->isPast()) {
                    // Verification code has expired, reset it
                    User::find($user->id)->update(['verification_code' => null]);
                    Auth::logout();
                    request()->session()->invalidate();
                    request()->session()->regenerateToken();

                    return redirect('/login')->with('loginError', 'Kode verifikasi telah kadaluarsa. Silakan mencoba lagi.');
                } else {
                    if (Hash::check($request->verification_code, $user->verification_code)) {
                        User::find($user->id)->update(['verification_code' => null]);
                        return redirect('/admin/dashboard');
                    } else {
                        return back()->with(['verification_code' => 'Kode verifikasi tidak sesuai!']);
                    }
                }
            }
        } catch (\Exception $e) {
            return back()->withErrors(['verification_code' => 'Kode verifikasi tidak sesuai!']);
        }
    }

}
