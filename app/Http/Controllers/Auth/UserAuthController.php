<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class UserAuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | TAMPILKAN HALAMAN LOGIN
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {

        return view('auth.login-admin');

    }


    /*
    |--------------------------------------------------------------------------
    | PROSES LOGIN
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        /*
        |--------------------------------------------------------------------------
        | CEK USERNAME
        |--------------------------------------------------------------------------
        */

        $admin = Admin::where(
            'username',
            $request->username
        )->first();

        if (!$admin) {

            return back()->with(
                'error',
                'Username tidak ditemukan'
            );

        }

        /*
        |--------------------------------------------------------------------------
        | CEK PASSWORD
        |--------------------------------------------------------------------------
        */

        if (!Hash::check(
            $request->password,
            $admin->password
        )) {

            return back()->with(
                'error',
                'Password salah'
            );

        }

        /*
        |--------------------------------------------------------------------------
        | SESSION LOGIN
        |--------------------------------------------------------------------------
        */

        session([
            'login_admin' => true,
            'id_admin'    => $admin->id,
            'nama_admin'  => $admin->nama,
            'username'    => $admin->username,
        ]);

        return redirect()->route('dashboard');

    }


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {

        session()->flush();

        return redirect('/login-admin');

    }
}