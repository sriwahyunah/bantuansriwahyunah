<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBantuan extends Model
{
    protected $table = 'jenis_bantuan';

    protected $fillable = [

        'kode_jenis',
        'nama_jenis',
        'deskripsi',
        'status'

    ];
}