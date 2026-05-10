<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisBantuanController extends Controller
{
    public function index()
    {
        return view('master.jenisbantuan.index');
    }

    public function create()
    {
        return view('master.jenisbantuan.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('jenisbantuan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('master.jenisbantuan.show', compact('id'));
    }

    public function edit($id)
    {
        return view('master.jenisbantuan.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('jenisbantuan.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('jenisbantuan.index')->with('success', 'Data berhasil dihapus');
    }
}