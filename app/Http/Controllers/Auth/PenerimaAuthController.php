<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenerimaAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LOGIN PENERIMA
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $request->validate([
            'nik'       => 'required',
            'username'  => 'required',
            'password'  => 'required',
        ]);

        /*
        |--------------------------------------------------------------------------
        | CEK NIK + USERNAME
        |--------------------------------------------------------------------------
        */

        $penerima = Penerima::where('nik', $request->nik)
                            ->where('username', $request->username)
                            ->first();

        /*
        |--------------------------------------------------------------------------
        | JIKA DATA TIDAK DITEMUKAN
        |--------------------------------------------------------------------------
        */

        if (!$penerima) {

            return back()->with(
                'error',
                'NIK atau Username tidak ditemukan.'
            );

        }

        /*
        |--------------------------------------------------------------------------
        | CEK PASSWORD
        |--------------------------------------------------------------------------
        */

        if (!Hash::check($request->password, $penerima->password)) {

            return back()->with(
                'error',
                'Password salah.'
            );

        }

        /*
        |--------------------------------------------------------------------------
        | LOGIN
        |--------------------------------------------------------------------------
        */

        Auth::guard('penerima')->login($penerima);

        /*
        |--------------------------------------------------------------------------
        | REGENERATE SESSION
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerate();

        /*
        |--------------------------------------------------------------------------
        | REDIRECT DASHBOARD
        |--------------------------------------------------------------------------
        */

        return redirect()->route('penerima.index');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT PENERIMA
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::guard('penerima')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.penerima.form');
    }
}