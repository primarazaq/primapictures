<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\VerificationCodeMail;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
 
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Generate and save verification code
            $verificationCode = mt_rand(100000, 999999);
            $hashedVerificationCode = bcrypt($verificationCode);
            User::find($user->id)->update(['verification_code' => $hashedVerificationCode]); // Update verification code

            // Send verification code to user's email
            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

            return redirect()->route('verify.form'); // Redirect to verification form
        }
 
        return back()->with(
            'loginError', 'Login Gagal! Periksa username dan password anda kembali !');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function verifyForm()
    {
        return view('verify');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'verification_code' => 'required|numeric|digits:6'
        ]);

        $user = Auth::user();

        if (Hash::check($request->verification_code, $user->verification_code)) {
            User::find($user->id)->update(['verification_code' => null]);
            return redirect('/admin/dashboard');
        } else {
            return back()->withErrors(['verification_code' => 'Kode verifikasi salah.']);
        }
    }
}
