<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * FORM LOGIN USER
     */
    public function loginUser()
    {
        return view('auth.login-user');
    }

    /**
     * FORM LOGIN PENERIMA
     */
    public function loginPenerima()
    {
        return view('auth.login-penerima');
    }

    /**
     * LOGOUT
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}