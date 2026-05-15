<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisBantuan;

class JenisBantuanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $jenis = JenisBantuan::latest()->get();

        return view(
            'admin.jenis-bantuan.index',
            compact('jenis')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view(
            'admin.jenis-bantuan.create'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'kode_jenis' => 'required|unique:jenis_bantuan',

            'nama_jenis' => 'required',

            'status' => 'required'

        ]);

        JenisBantuan::create([

            'kode_jenis' => $request->kode_jenis,

            'nama_jenis' => $request->nama_jenis,

            'deskripsi' => $request->deskripsi,

            'status' => $request->status

        ]);

        return redirect()
            ->route('jenis-bantuan.index')
            ->with(
                'success',
                'Jenis bantuan berhasil ditambahkan'
            );
    }
}