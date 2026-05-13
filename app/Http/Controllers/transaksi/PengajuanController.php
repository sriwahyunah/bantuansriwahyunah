<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    /**
     * INDEX
     */
    public function index()
    {
        $pengajuans = Pengajuan::latest()->get();

        return view(
            'admin.pengajuan.index',
            compact('pengajuans')
        );
    }

    /**
     * CREATE
     */
    public function create()
    {
        return view('admin.pengajuan.create');
    }

    /**
     * STORE
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_penerima' => 'required',

            'judul' => 'required',

            'deskripsi' => 'required',

            'status' => 'required',

        ]);

        /*
        |--------------------------------------------------------------------------
        | FILE
        |--------------------------------------------------------------------------
        */

        $fileName = null;

        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $fileName = time().'_'.$file->getClientOriginalName();

            $file->move(
                public_path('uploads/pengajuan'),
                $fileName
            );
        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN
        |--------------------------------------------------------------------------
        */

        Pengajuan::create([

            'id_penerima' => $request->id_penerima,

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'file' => $fileName,

            'status' => $request->status,

        ]);

        return redirect()

            ->route('admin.pengajuan.index')

            ->with(
                'success',
                'Data pengajuan berhasil ditambahkan'
            );
    }

    /**
     * DETAIL
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        return view(
            'admin.pengajuan.detail',
            compact('pengajuan')
        );
    }

    /**
     * EDIT
     */
    public function edit($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        return view(
            'admin.pengajuan.edit',
            compact('pengajuan')
        );
    }

    /**
     * UPDATE
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'id_penerima' => 'required',

            'judul' => 'required',

            'deskripsi' => 'required',

            'status' => 'required',

        ]);

        $pengajuan = Pengajuan::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | FILE
        |--------------------------------------------------------------------------
        */

        $fileName = $pengajuan->file;

        if ($request->hasFile('file')) {

            /*
            |--------------------------------------------------------------------------
            | HAPUS FILE LAMA
            |--------------------------------------------------------------------------
            */

            if ($pengajuan->file != null) {

                $path = public_path(
                    'uploads/pengajuan/'.$pengajuan->file
                );

                if (file_exists($path)) {

                    unlink($path);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | UPLOAD BARU
            |--------------------------------------------------------------------------
            */

            $file = $request->file('file');

            $fileName = time().'_'.$file->getClientOriginalName();

            $file->move(
                public_path('uploads/pengajuan'),
                $fileName
            );
        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE
        |--------------------------------------------------------------------------
        */

        $pengajuan->update([

            'id_penerima' => $request->id_penerima,

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'file' => $fileName,

            'status' => $request->status,

        ]);

        return redirect()

            ->route('admin.pengajuan.index')

            ->with(
                'success',
                'Data pengajuan berhasil diupdate'
            );
    }

    /**
     * DELETE
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | HAPUS FILE
        |--------------------------------------------------------------------------
        */

        if ($pengajuan->file != null) {

            $path = public_path(
                'uploads/pengajuan/'.$pengajuan->file
            );

            if (file_exists($path)) {

                unlink($path);
            }
        }

        $pengajuan->delete();

        return redirect()

            ->route('admin.pengajuan.index')

            ->with(
                'success',
                'Data pengajuan berhasil dihapus'
            );
    }
}