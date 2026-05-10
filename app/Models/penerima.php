<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';

    protected $guarded = [];


    /*
    |--------------------------------------------------------------------------
    | RELASI KATEGORI
    |--------------------------------------------------------------------------
    */

    public function kategori()
    {
        return $this->belongsTo(
            KategoriPenerima::class,
            'id_kategori_penerima'
        );
    }
    /*
    |--------------------------------------------------------------------------
    | RELASI ALAMAT
    |--------------------------------------------------------------------------
    */

    public function alamat()
    {
        return $this->belongsTo(
            Alamat::class,
            'id_alamat'
        );
    }
}
