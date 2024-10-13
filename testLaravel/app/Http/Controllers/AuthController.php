<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthRequest;
use Illuminate\Support\Facades\{
    Hash,
    Auth,
};

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function authenticate(StoreAuthRequest $request, Auth $auth){
        $credential = $request->only('email','password');
        if ($auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard.index');

            return back()->withErrors([
                'email' => 'Email Tidak Ditemukan',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request, Auth $auth){
        $auth::logout();
        $request->session()->invalidate();
        $request->session->regenerateToken();

        return redirect()->route('login');
        
    }
}
