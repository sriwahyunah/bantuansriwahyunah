<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardPenerimaController extends Controller
{
    public function index()
    {
        return view('dashboard.penerima.index');
    }
}