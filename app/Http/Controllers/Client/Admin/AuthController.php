<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login.index');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.manage-press-release.index');
            // dd('login');
        }

        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
