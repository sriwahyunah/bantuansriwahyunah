<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusPengajuanController extends Controller
{
    public function index()
    {
        return view('master.statuspengajuan.index');
    }

    public function create()
    {
        return view('master.statuspengajuan.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('statuspengajuan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('master.statuspengajuan.show', compact('id'));
    }

    public function edit($id)
    {
        return view('master.statuspengajuan.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('statuspengajuan.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('statuspengajuan.index')->with('success', 'Data berhasil dihapus');
    }
}