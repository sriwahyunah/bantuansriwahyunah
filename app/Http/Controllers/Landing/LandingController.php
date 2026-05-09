<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        $program = collect([

            (object)[
                'id' => 1,
                'judul' => 'Bantuan Anak Yatim',
                'deskripsi' => 'Program bantuan pendidikan dan kebutuhan sekolah anak yatim.',
                'gambar' => 'anak-yatim.jpg',
            ],

            (object)[
                'id' => 2,
                'judul' => 'Bantuan Sembako',
                'deskripsi' => 'Penyaluran sembako untuk keluarga kurang mampu.',
                'gambar' => 'sembako.jpg',
            ],

            (object)[
                'id' => 3,
                'judul' => 'Bantuan Pendidikan',
                'deskripsi' => 'Dukungan biaya pendidikan untuk siswa berprestasi.',
                'gambar' => 'pendidikan.jpg',
            ],

        ]);

        return view('landing.home', compact('program'));
    }

    /*
    |--------------------------------------------------------------------------
    | PROGRAM
    |--------------------------------------------------------------------------
    */

    public function program()
    {
        $program = collect([

            (object)[
                'id' => 1,
                'judul' => 'Bantuan Anak Yatim',
                'deskripsi' => 'Program bantuan pendidikan untuk anak yatim.',
                'gambar' => 'anak-yatim.jpg',
            ],

            (object)[
                'id' => 2,
                'judul' => 'Bantuan Pendidikan',
                'deskripsi' => 'Dukungan biaya pendidikan siswa.',
                'gambar' => 'pendidikan.jpg',
            ],

            (object)[
                'id' => 3,
                'judul' => 'Bantuan Kesehatan',
                'deskripsi' => 'Bantuan kesehatan masyarakat.',
                'gambar' => 'kesehatan.jpg',
            ],

        ]);

        return view('landing.program', compact('program'));
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL PROGRAM
    |--------------------------------------------------------------------------
    */

    public function detail($id)
    {
        $program = (object)[
            'id' => $id,
            'judul' => 'Detail Program Bantuan',
            'deskripsi' => 'Ini adalah detail program bantuan sementara tanpa database.',
            'gambar' => 'default.jpg',
        ];

        return view('landing.detail', compact('program'));
    }

    /*
    |--------------------------------------------------------------------------
    | TENTANG
    |--------------------------------------------------------------------------
    */

    public function tentang()
    {
        return view('landing.tentang');
    }

    /*
    |--------------------------------------------------------------------------
    | KONTAK
    |--------------------------------------------------------------------------
    */

    public function kontak()
    {
        return view('landing.kontak');
    }

    /*
    |--------------------------------------------------------------------------
    | DAFTAR ISI
    |--------------------------------------------------------------------------
    */

    public function daftarisi()
    {
        return view('landing.daftarisi');
    }

    /*
    |--------------------------------------------------------------------------
    | KATEGORI
    |--------------------------------------------------------------------------
    */

    public function kategori()
    {
        $kategori = collect([

            (object)[
                'nama' => 'Pendidikan',
                'deskripsi' => 'Bantuan pendidikan untuk siswa.',
            ],

            (object)[
                'nama' => 'Kesehatan',
                'deskripsi' => 'Bantuan kesehatan masyarakat.',
            ],

            (object)[
                'nama' => 'Sosial',
                'deskripsi' => 'Bantuan sosial dan kemanusiaan.',
            ],

        ]);

        return view('landing.kategori', compact('kategori'));
    }
}