<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index()
    {
        return view('transaksi.verifikasi.index');
    }

    public function create()
    {
        return view('transaksi.verifikasi.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('verifikasi.index')
            ->with('success', 'Data verifikasi berhasil disimpan');
    }

    public function show($id)
    {
        return view('transaksi.verifikasi.show', compact('id'));
    }

    public function edit($id)
    {
        return view('transaksi.verifikasi.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('verifikasi.index')
            ->with('success', 'Data verifikasi berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('verifikasi.index')
            ->with('success', 'Data verifikasi berhasil dihapus');
    }
}