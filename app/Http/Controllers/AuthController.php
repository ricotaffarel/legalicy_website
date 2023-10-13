<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }

            return back()->with('error', 'email atau password salah');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    function redirect()
    {
        if (auth()->user()) {
            return redirect()->intended('/admin/dashboard');
        }
        return redirect()->intended('/login');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}