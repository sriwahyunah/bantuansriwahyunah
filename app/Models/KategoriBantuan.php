<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBantuan extends Model
{
    protected $table = 'kategori_bantuans';

    protected $fillable = [
        'nama_kategori',
    ];

    public function jenisBantuans()
    {
        return $this->hasMany(JenisBantuan::class);
    }
}