<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuktiPenyaluranController extends Controller
{
    public function index()
    {
        return view('transaksi.buktipenyaluran.index');
    }

    public function create()
    {
        return view('transaksi.buktipenyaluran.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('buktipenyaluran.index')
            ->with('success', 'Bukti penyaluran berhasil disimpan');
    }

    public function show($id)
    {
        return view('transaksi.buktipenyaluran.show', compact('id'));
    }

    public function edit($id)
    {
        return view('transaksi.buktipenyaluran.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('buktipenyaluran.index')
            ->with('success', 'Bukti penyaluran berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('buktipenyaluran.index')
            ->with('success', 'Bukti penyaluran berhasil dihapus');
    }
}