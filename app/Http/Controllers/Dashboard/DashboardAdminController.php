<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Penerima;
use App\Models\KategoriBantuan;
use App\Models\Pengajuan;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboardadmin', [
            'totalPenerima' => Penerima::count(),
            'totalKategori' => KategoriBantuan::count(),
            'totalPengajuan' => Pengajuan::count(),
        ]);
    }
}