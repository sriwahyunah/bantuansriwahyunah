<?php

namespace App\Http\Controllers\ZonaPenerima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZonaPenerimaController extends Controller
{
    /**
     * TAMPIL DATA ZONA PENERIMA
     */
    public function index()
    {
        return view('zona_penerima.index');
    }

    /**
     * FORM CREATE
     */
    public function create()
    {
        return view('zona_penerima.create');
    }

    /**
     * SIMPAN DATA
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_zona' => 'required|string|max:255',
        ]);

        // simpan (nanti bisa pakai model)
        // ZonaPenerima::create($request->all());

        return redirect()->route('zona-penerima.index')
            ->with('success', 'Zona penerima berhasil ditambahkan');
    }

    /**
     * DETAIL DATA
     */
    public function show($id)
    {
        return view('zona_penerima.show', compact('id'));
    }

    /**
     * EDIT DATA
     */
    public function edit($id)
    {
        return view('zona_penerima.edit', compact('id'));
    }

    /**
     * UPDATE DATA
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_zona' => 'required|string|max:255',
        ]);

        return redirect()->route('zona-penerima.index')
            ->with('success', 'Zona penerima berhasil diupdate');
    }

    /**
     * DELETE DATA
     */
    public function destroy($id)
    {
        return redirect()->route('zona-penerima.index')
            ->with('success', 'Zona penerima berhasil dihapus');
    }
}