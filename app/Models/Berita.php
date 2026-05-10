<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Komentar; // ✔ FIX ERROR MERAH

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'gambar'
    ];

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
}