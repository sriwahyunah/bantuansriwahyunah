<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN LOGIN
    |--------------------------------------------------------------------------
    */

    public function login()
    {
        return view('auth.login-user');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES LOGIN
    |--------------------------------------------------------------------------
    */

    public function prosesLogin(Request $request)
    {

        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        /*
        |--------------------------------------------------------------------------
        | LOGIN
        |--------------------------------------------------------------------------
        */

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/admin/dashboard');
        }

        /*
        |--------------------------------------------------------------------------
        | GAGAL LOGIN
        |--------------------------------------------------------------------------
        */

        return back()->with(
            'error',
            'Username atau password salah'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login-user');
    }
}