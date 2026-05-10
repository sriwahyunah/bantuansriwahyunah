<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthPenerimaController extends Controller
{
    public function login()
    {
        return view('penerima.auth.login');
    }

    public function dashboard()
    {
        return redirect('/dashboard/penerima');
    }
}