<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('transaksi.berita.index');
    }

    public function create()
    {
        return view('transaksi.berita.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('transaksi.berita.show', compact('id'));
    }

    public function edit($id)
    {
        return view('transaksi.berita.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}