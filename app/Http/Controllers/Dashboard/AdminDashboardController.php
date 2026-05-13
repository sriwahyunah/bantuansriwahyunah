<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Penerima;
use App\Models\Pengajuan;
use App\Models\DetailBantuan;
use App\Models\Berita;

class AdminDashboardController extends Controller
{
    /**
     * Dashboard admin
     */
    public function index()
    {
        $totalUser = Admin::count();
        $totalPenerima = Penerima::count();
        $totalPengajuan = Pengajuan::count();
        $totalPenyaluran = DetailBantuan::count();
        $totalBerita = Berita::count();

        $pengajuanTerbaru = Pengajuan::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard.index', [
            'totalUser' => $totalUser,
            'totalPenerima' => $totalPenerima,
            'totalPengajuan' => $totalPengajuan,
            'totalPenyaluran' => $totalPenyaluran,
            'totalBerita' => $totalBerita,
            'pengajuanTerbaru' => $pengajuanTerbaru,
        ]);
    }
}