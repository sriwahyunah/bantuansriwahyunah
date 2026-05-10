<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * HALAMAN INDEX PROGRAM
     */
    public function index()
    {
        return view('user.program.index');
    }

    /**
     * HALAMAN TAMBAH PROGRAM
     */
    public function create()
    {
        return view('user.program.create');
    }

    /**
     * SIMPAN DATA PROGRAM
     */
    public function store(Request $request)
    {
        return redirect('/program')
            ->with('success', 'Data program berhasil disimpan');
    }

    /**
     * DETAIL PROGRAM
     */
    public function show($id)
    {
        return view('user.program.show');
    }

    /**
     * HALAMAN EDIT PROGRAM
     */
    public function edit($id)
    {
        return view('user.program.edit');
    }

    /**
     * UPDATE PROGRAM
     */
    public function update(Request $request, $id)
    {
        return redirect('/program')
            ->with('success', 'Data program berhasil diupdate');
    }

    /**
     * HAPUS PROGRAM
     */
    public function destroy($id)
    {
        return redirect('/program')
            ->with('success', 'Data program berhasil dihapus');
    }
}