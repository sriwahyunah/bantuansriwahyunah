<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PangkatController extends Controller
{
    public function index()
    {
        return view('master.pangkat.index');
    }

    public function create()
    {
        return view('master.pangkat.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('pangkat.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        return view('master.pangkat.show', compact('id'));
    }

    public function edit($id)
    {
        return view('master.pangkat.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('pangkat.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('pangkat.index')->with('success', 'Data berhasil dihapus');
    }
}