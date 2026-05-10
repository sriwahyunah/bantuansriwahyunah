<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBantuan extends Model
{
    protected $fillable = [
        'kategori_bantuan_id',
        'nama_jenis',
        'deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBantuan::class);
    }
}