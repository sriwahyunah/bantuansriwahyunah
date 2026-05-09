<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = [
            [
                'nama' => 'Pendidikan',
                'deskripsi' => 'Bantuan pendidikan untuk anak-anak.'
            ],
            [
                'nama' => 'Kesehatan',
                'deskripsi' => 'Bantuan kesehatan masyarakat.'
            ],
            [
                'nama' => 'Bencana Alam',
                'deskripsi' => 'Bantuan korban bencana alam.'
            ],
        ];

        return view('kategori.index', compact('kategori'));
    }
}