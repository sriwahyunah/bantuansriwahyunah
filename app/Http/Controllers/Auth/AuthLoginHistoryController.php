<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthLoginHistoryController extends Controller
{
    public function index()
    {
        return view('auth.history.index');
    }
}