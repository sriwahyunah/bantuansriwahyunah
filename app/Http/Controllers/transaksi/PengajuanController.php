<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('transaksi.pengajuan.index');
    }

    public function create()
    {
        return view('transaksi.pengajuan.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('pengajuan.index')
            ->with('success', 'Pengajuan berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('transaksi.pengajuan.show', compact('id'));
    }

    public function edit($id)
    {
        return view('transaksi.pengajuan.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('pengajuan.index')
            ->with('success', 'Pengajuan berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('pengajuan.index')
            ->with('success', 'Pengajuan berhasil dihapus');
    }
}