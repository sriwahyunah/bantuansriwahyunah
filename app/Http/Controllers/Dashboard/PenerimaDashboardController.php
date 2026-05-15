<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Pengajuan;
use App\Models\Berita;

class PenerimaDashboardController extends Controller
{
    public function index()
    {
        $totalPengajuan = Pengajuan::count();

        $diterima = Pengajuan::where('status', 'diterima')->count();

        $pending = Pengajuan::where('status', 'pending')->count();

        $ditolak = Pengajuan::where('status', 'ditolak')->count();

        $riwayat = Pengajuan::latest()
            ->take(5)
            ->get();

        $berita = Berita::latest()
            ->take(3)
            ->get();

        return view('penerima.dashboard.index', compact(
            'totalPengajuan',
            'diterima',
            'pending',
            'ditolak',
            'riwayat',
            'berita'
        ));
    }
}