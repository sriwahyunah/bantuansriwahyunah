<?php

namespace App\Services;

use App\Models\Berita;
use Illuminate\Support\Str;

class AutoBeritaService
{
    /*
    |--------------------------------------------------------------------------
    | GENERATE SLUG BERITA
    |--------------------------------------------------------------------------
    */

    public static function generateSlug($judul)
    {
        $slug = Str::slug($judul);

        $count = Berita::where('slug', 'LIKE', "{$slug}%")->count();

        if ($count > 0) {

            $slug = $slug . '-' . ($count + 1);
        }

        return $slug;
    }

    /*
    |--------------------------------------------------------------------------
    | AUTO EXCERPT / RINGKASAN
    |--------------------------------------------------------------------------
    */

    public static function generateExcerpt($isi, $limit = 150)
    {
        return Str::limit(strip_tags($isi), $limit);
    }

    /*
    |--------------------------------------------------------------------------
    | FORMAT TANGGAL BERITA
    |--------------------------------------------------------------------------
    */

    public static function formatTanggal($tanggal)
    {
        return \Carbon\Carbon::parse($tanggal)
            ->translatedFormat('d F Y');
    }

    /*
    |--------------------------------------------------------------------------
    | STATUS BADGE
    |--------------------------------------------------------------------------
    */

    public static function statusBadge($status)
    {
        if ($status == 'publish') {

            return '<span class=\"badge badge-success\">Publish</span>';
        }

        return '<span class=\"badge badge-secondary\">Draft</span>';
    }
}