<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Berita;
use App\Models\Komentar;
use App\Models\KategoriPenerima;

class LandingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        $berita = Berita::where('status', 'publish')
            ->latest()
            ->take(6)
            ->get();

        $kategoriPenerima = KategoriPenerima::latest()->get();

        return view('landing.home', [
            'berita' => $berita,
            'kategoriPenerima' => $kategoriPenerima,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL BERITA
    |--------------------------------------------------------------------------
    */

    public function detailArtikel($slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        $komentar = Komentar::latest()->get();

        $beritaLainnya = Berita::where('id', '!=', $berita->id)
            ->where('status', 'publish')
            ->latest()
            ->take(5)
            ->get();

        return view('landing.detailartikel', [
            'berita' => $berita,
            'komentar' => $komentar,
            'beritaLainnya' => $beritaLainnya,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DAFTAR KATEGORI
    |--------------------------------------------------------------------------
    */

    public function daftarKategori()
    {
        $kategoriPenerima = KategoriPenerima::latest()->get();

        return view('landing.daftarkategori', [
            'kategoriPenerima' => $kategoriPenerima,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL KATEGORI
    |--------------------------------------------------------------------------
    */

    public function kategori($id)
    {
        $kategori = KategoriPenerima::findOrFail($id);

        return view('landing.kategori', [
            'kategori' => $kategori,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | PENCARIAN BERITA
    |--------------------------------------------------------------------------
    */

    public function tag(Request $request)
    {
        $search = $request->search;

        $berita = Berita::where('status', 'publish')
            ->where(function ($query) use ($search) {

                $query->where('judul', 'like', '%' . $search . '%')
                      ->orWhere('isi', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(10);

        return view('landing.tag', [
            'berita' => $berita,
            'search' => $search,
        ]);
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

    public function daftarIsi()
    {
        $berita = Berita::where('status', 'publish')
            ->latest()
            ->paginate(12);

        return view('landing.daftarisi', [
            'berita' => $berita,
        ]);
    }
}