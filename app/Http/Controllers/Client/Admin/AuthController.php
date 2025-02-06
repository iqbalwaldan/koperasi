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
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if($user->roles->first()->name != 'super-admin'){
                return redirect()->route('admin.manage-service.index');
            }
            return redirect()->route('admin.manage-press-release.index');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
