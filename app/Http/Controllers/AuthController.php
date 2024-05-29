<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.index')->with('success', 'Berhasil login');
        }

        return back()->withErrors([
            'email' => 'Email tidak ditemukan',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerpost(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', 'unique:users,email'],
            'nohp' => ['required', 'min:11'],
            'password' => ['required', 'min:8', 'confirmed'],
            'checkbox' => ['accepted'],
        ]);

        $user = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'avatar' => 'user.png'
        ]);

        if($user){
            return redirect()->route('login')->with('success', 'Berhasil registrasi');
        }

        return redirect()->route('login')->with('info', 'Gagal registrasi');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah logout');
    }

    public function forgotpassword()
    {
        return view('auth.lupapassword');
    }
}
