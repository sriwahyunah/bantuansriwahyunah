<?php

namespace App\Http\Controllers;

use
App\Models\Penerima;
use App\Models\Alamat;
use App\Models\KategoriPenerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenerimaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $penerima = Penerima::with([
            'kategori',
            'alamat'
        ])->latest()->get();

        return view(
            'penerima.index',
            compact('penerima')
        );

    }
    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {

        $kategori = KategoriPenerima::all();

        return view(
            'penerima.create',
            compact('kategori')
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
            'nama'                   => 'required',
            'username'               => 'required|unique:penerima',
            'password'               => 'required',
            'telepon'                => 'nullable',
            'nik'                    => 'nullable',
            'kk'                     => 'nullable',
            'id_kategori_penerima'   => 'required',
        ]);
        /*
        |--------------------------------------------------------------------------
        | SIMPAN ALAMAT
        |--------------------------------------------------------------------------
        */

        $alamat = Alamat::create([
            'jalan'     => $request->jalan,
            'desa'      => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi'  => $request->provinsi,
            'kode_pos'  => $request->kode_pos,
        ]);
         /*
        |--------------------------------------------------------------------------
        | SIMPAN PENERIMA
        |--------------------------------------------------------------------------
        */

        Penerima::create([

            'id_kategori_penerima' => $request->id_kategori_penerima,
            'id_alamat'            => $alamat->id,
            'nik'                  => $request->nik,
            'kk'                   => $request->kk,
            'nama'                 => $request->nama,
            'username'             => $request->username,
            'password'             => Hash::make($request->password),
            'telepon'              => $request->telepon,
            'status_verifikasi'    => 'menunggu',
            'status'               => 'aktif',

        ]);
         return redirect()
            ->route('penerima.index')
            ->with('success', 'Data berhasil ditambahkan');

    }
 /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {

        $penerima = Penerima::findOrFail($id);

        $kategori = KategoriPenerima::all();

        return view(
            'penerima.edit',
            compact('penerima', 'kategori')
        );

    }
     /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {

        $penerima = Penerima::findOrFail($id);

        $penerima->update([
            'nama'              => $request->nama,
            'username'          => $request->username,
            'telepon'           => $request->telepon,
            'nik'               => $request->nik,
            'kk'                => $request->kk,
            'status'            => $request->status,
            'status_verifikasi' => $request->status_verifikasi,
        ]);
        return redirect()
            ->route('penerima.index')
            ->with('success', 'Data berhasil diupdate');

    }


    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {

        $penerima = Penerima::findOrFail($id);

        $penerima->delete();

        return redirect()
            ->route('penerima.index')
            ->with('success', 'Data berhasil dihapus');

    }
}