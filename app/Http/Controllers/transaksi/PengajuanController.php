<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pengajuan = Pengajuan::latest()->get();

        return view('admin.pengajuan.index', compact('pengajuan'));
    }

    /*
    |--------------------------------------------------------------------------
    | PENERIMA
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('penerima.pengajuan.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_bantuan' => 'required',
            'keterangan' => 'required',
        ]);

        Pengajuan::create([
            'jenis_bantuan' => $request->jenis_bantuan,
            'keterangan' => $request->keterangan,
            'status' => 'pending',
        ]);

        return redirect('/penerima/dashboard')
            ->with('success', 'Pengajuan berhasil dikirim');
    }
}