<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Penerima;
use App\Models\Status;
use App\Models\Jabatan;
use App\Models\Pangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class PenerimaController extends Controller
{
    public function index()
    {
        $penerimas = Penerima::latest()->paginate(10);

        return view('admin.penerima.index', compact('penerimas'));
    }

    public function create()
    {
        return view('admin.penerima.create', [
            'statuses' => Status::all(),
            'jabatans' => Jabatan::all(),
            'pangkats' => Pangkat::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:penerimas,nik',
            'nama' => 'required',
            'email' => 'required|email|unique:penerimas,email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'status_id' => 'required',
            'jabatan_id' => 'required',
            'pangkat_id' => 'required',
            'password' => 'required|min:6',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {

            $foto = $request->file('foto');

            $fotoName = time().'_'.$foto->getClientOriginalName();

            $foto->move(public_path('uploads/penerima'), $fotoName);
        }

        Penerima::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'status_id' => $request->status_id,
            'jabatan_id' => $request->jabatan_id,
            'pangkat_id' => $request->pangkat_id,
            'password' => Hash::make($request->password),
            'foto' => $fotoName,
        ]);

        return redirect()
            ->route('penerima.index')
            ->with('success', 'Data penerima berhasil ditambahkan');
    }
}