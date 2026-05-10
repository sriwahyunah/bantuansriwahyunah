<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * DISPLAY DATA
     */
    public function index()
    {
        $jabatan = Jabatan::orderBy('id', 'DESC')->get();

        return view('jabatan.index', [
            'jabatan' => $jabatan
        ]);
    }

    /**
     * FORM CREATE
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * STORE DATA
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|max:255',
            'keterangan'   => 'nullable'
        ]);

        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
            'keterangan'   => $request->keterangan
        ]);

        return redirect()
            ->route('jabatan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * SHOW DATA
     */
    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);

        return view('jabatan.show', compact('jabatan'));
    }

    /**
     * FORM EDIT
     */
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);

        return view('jabatan.edit', compact('jabatan'));
    }

    /**
     * UPDATE DATA
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required|max:255',
            'keterangan'   => 'nullable'
        ]);

        $jabatan = Jabatan::findOrFail($id);

        $jabatan->update([
            'nama_jabatan' => $request->nama_jabatan,
            'keterangan'   => $request->keterangan
        ]);

        return redirect()
            ->route('jabatan.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * DELETE DATA
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);

        $jabatan->delete();

        return redirect()
            ->route('jabatan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}