<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBantuan extends Model
{
    protected $table = 'jenis_bantuans';

    protected $fillable = [
        'kategori_bantuan_id',
        'nama_jenis',
    ];

    public function kategoriBantuan()
    {
        return $this->belongsTo(KategoriBantuan::class);
    }

    public function pengajuans()
    {
        return $this->hasMany(Pengajuan::class);
    }
}