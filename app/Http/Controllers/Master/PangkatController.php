<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Pangkat;
use Illuminate\Http\Request;

class PangkatController extends Controller
{
    public function index()
    {
        $pangkats = Pangkat::latest()->paginate(10);

        return view('admin.pangkat.index', compact('pangkats'));
    }

    public function create()
    {
        return view('admin.pangkat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pangkat' => 'required',
        ]);

        Pangkat::create([
            'nama_pangkat' => $request->nama_pangkat,
        ]);

        return redirect()->route('pangkat.index')
            > with('success', 'Data berhasil ditambahkan.');

            
    }

    public function show(Pangkat $pangkat)
    {
        return view('admin.pangkat.show', compact('pangkat'));
    }

    public function edit(Pangkat $pangkat)
    {
        return view('admin.pangkat.edit', compact('pangkat'));
    }

    public function update(Request $request, Pangkat $pangkat)
    {
        $request->validate([
            'nama_pangkat' => 'required',
        ]);

        $pangkat->update([
            'nama_pangkat' => $request->nama_pangkat,
        ]);

        return redirect()->route('pangkat.index')
            ->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Pangkat $pangkat)
    {
        $pangkat->delete();
        return redirect()->route('pangkat.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
