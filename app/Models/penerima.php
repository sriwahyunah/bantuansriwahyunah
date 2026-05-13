<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | TABLE
    |--------------------------------------------------------------------------
    */

    protected $table = 'penerima';

    /*
    |--------------------------------------------------------------------------
    | PRIMARY KEY
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';

    /*
    |--------------------------------------------------------------------------
    | FILLABLE
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'id_kategori_penerima',

        'id_alamat',

        'nik',

        'kk',

        'nama',

        'username',

        'password',

        'telepon',

        'status_verifikasi',

        'status',

        'foto',

    ];

    /*
    |--------------------------------------------------------------------------
    | HIDDEN
    |--------------------------------------------------------------------------
    */

    protected $hidden = [

        'password',

    ];
}