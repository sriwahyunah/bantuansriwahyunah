<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('master.status.index');
    }

    public function create()
    {
        return view('master.status.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('status.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('master.status.show', compact('id'));
    }

    public function edit($id)
    {
        return view('master.status.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('status.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('status.index')->with('success', 'Data berhasil dihapus');
    }
}