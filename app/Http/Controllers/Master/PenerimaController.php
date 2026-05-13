<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penerima;
use Illuminate\Support\Facades\Hash;

class PenerimaController extends Controller
{
    /**
     * INDEX
     */
    public function index()
    {
        $penerima = Penerima::latest()->get();

        return view(
            'admin.penerima.index',
            compact('penerima')
        );
    }

    /**
     * FORM CREATE
     */
    public function create()
    {
        return view('admin.penerima.create');
    }

    /**
     * STORE
     */
    public function store(Request $request)
    {
        $request->validate([

            'nik' => 'required|unique:penerima,nik',

            'kk' => 'required',

            'nama' => 'required',

            'username' => 'required|unique:penerima,username',

            'password' => 'required',

            'telepon' => 'required',

        ]);

        /*
        |--------------------------------------------------------------------------
        | FOTO
        |--------------------------------------------------------------------------
        */

        $foto = null;

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFile = time().'_'.$file->getClientOriginalName();

            $file->move(
                public_path('uploads/penerima'),
                $namaFile
            );

            $foto = $namaFile;
        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN
        |--------------------------------------------------------------------------
        */

        Penerima::create([

            'id_kategori_penerima' => $request->id_kategori_penerima,

            'id_alamat' => $request->id_alamat,

            'nik' => $request->nik,

            'kk' => $request->kk,

            'nama' => $request->nama,

            'username' => $request->username,

            'password' => Hash::make($request->password),

            'telepon' => $request->telepon,

            'status_verifikasi' => $request->status_verifikasi,

            'status' => $request->status,

            'foto' => $foto,

        ]);

        return redirect()

            ->route('admin.penerima.index')

            ->with(
                'success',
                'Data penerima berhasil ditambahkan'
            );
    }

    /**
     * DETAIL
     */
    public function show($id)
    {
        $penerima = Penerima::findOrFail($id);

        return view(
            'admin.penerima.detail',
            compact('penerima')
        );
    }

    /**
     * FORM EDIT
     */
    public function edit($id)
    {
        $penerima = Penerima::findOrFail($id);

        return view(
            'admin.penerima.edit',
            compact('penerima')
        );
    }

    /**
     * UPDATE
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nik' => 'required',

            'kk' => 'required',

            'nama' => 'required',

            'username' => 'required',

            'telepon' => 'required',

        ]);

        $penerima = Penerima::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | FOTO
        |--------------------------------------------------------------------------
        */

        $foto = $penerima->foto;

        if ($request->hasFile('foto')) {

            /*
            |--------------------------------------------------------------------------
            | HAPUS FOTO LAMA
            |--------------------------------------------------------------------------
            */

            if ($penerima->foto != null) {

                $path = public_path(
                    'uploads/penerima/'.$penerima->foto
                );

                if (file_exists($path)) {

                    unlink($path);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | UPLOAD FOTO BARU
            |--------------------------------------------------------------------------
            */

            $file = $request->file('foto');

            $namaFile = time().'_'.$file->getClientOriginalName();

            $file->move(
                public_path('uploads/penerima'),
                $namaFile
            );

            $foto = $namaFile;
        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $data = [

            'id_kategori_penerima' => $request->id_kategori_penerima,

            'id_alamat' => $request->id_alamat,

            'nik' => $request->nik,

            'kk' => $request->kk,

            'nama' => $request->nama,

            'username' => $request->username,

            'telepon' => $request->telepon,

            'status_verifikasi' => $request->status_verifikasi,

            'status' => $request->status,

            'foto' => $foto,

        ];

        /*
        |--------------------------------------------------------------------------
        | PASSWORD
        |--------------------------------------------------------------------------
        */

        if ($request->password != null) {

            $data['password'] = Hash::make(
                $request->password
            );
        }

        $penerima->update($data);

        return redirect()

            ->route('admin.penerima.index')

            ->with(
                'success',
                'Data penerima berhasil diupdate'
            );
    }

    /**
     * DELETE
     */
    public function destroy($id)
    {
        $penerima = Penerima::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | HAPUS FOTO
        |--------------------------------------------------------------------------
        */

        if ($penerima->foto != null) {

            $path = public_path(
                'uploads/penerima/'.$penerima->foto
            );

            if (file_exists($path)) {

                unlink($path);
            }
        }

        $penerima->delete();

        return redirect()

            ->route('admin.penerima.index')

            ->with(
                'success',
                'Data penerima berhasil dihapus'
            );
    }
}