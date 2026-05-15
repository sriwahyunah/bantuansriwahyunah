<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Penerima;
use App\Models\Pengajuan;
use App\Models\Berita;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPenerima = Penerima::count();

        $totalPengajuan = Pengajuan::count();

        $pending = Pengajuan::where('status', 'pending')->count();

        $diterima = Pengajuan::where('status', 'diterima')->count();

        $ditolak = Pengajuan::where('status', 'ditolak')->count();

        $pengajuanTerbaru = Pengajuan::latest()
            ->take(5)
            ->get();

        $berita = Berita::latest()
            ->take(3)
            ->get();

        return view('admin.dashboard.index', compact(
            'totalPenerima',
            'totalPengajuan',
            'pending',
            'diterima',
            'ditolak',
            'pengajuanTerbaru',
            'berita'
        ));
    }
}