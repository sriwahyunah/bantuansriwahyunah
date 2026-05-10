<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    public function index()
    {
        return view('master.tahun.index');
    }

    public function create()
    {
        return view('master.tahun.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('tahun.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('master.tahun.show', compact('id'));
    }

    public function edit($id)
    {
        return view('master.tahun.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('tahun.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('tahun.index')->with('success', 'Data berhasil dihapus');
    }
}