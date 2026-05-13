<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayahs';

    protected $fillable = [
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
    ];
}