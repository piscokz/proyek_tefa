<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use Illuminate\Support\Facades\{
    Auth
};
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate(StoreAuthRequest $request)
    {
        // Mendapatkan email dan password dari request
        $credentials = $request->only('email', 'password');

        // Cek apakah email valid
        $user = \App\Models\User::where('email', $credentials['email'])->first();
        if (!$user) {
            return back()->withErrors([
                'email' => 'Email tidak terdaftar.',
            ])->onlyInput('email');
        }

        // Cek apakah password cocok
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'password' => 'Password yang dimasukkan salah.',
            ])->onlyInput('email');
        }

        // Jika login berhasil, regenerasi session
        $request->session()->regenerate();

        // Redirect ke dashboard jika berhasil login
        return redirect()->route('admin.dashboard.index');
    }

    public function logout(Request $request)
    {
        // Logout pengguna dan invalidasi session
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect()->route('login');
    }
}
