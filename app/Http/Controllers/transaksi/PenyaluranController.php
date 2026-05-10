<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    public function index()
    {
        return view('transaksi.penyaluran.index');
    }

    public function create()
    {
        return view('transaksi.penyaluran.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('penyaluran.index')
            ->with('success', 'Penyaluran berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('transaksi.penyaluran.show', compact('id'));
    }

    public function edit($id)
    {
        return view('transaksi.penyaluran.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('penyaluran.index')
            ->with('success', 'Penyaluran berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('penyaluran.index')
            ->with('success', 'Penyaluran berhasil dihapus');
    }
}