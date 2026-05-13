<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | TABLE
    |--------------------------------------------------------------------------
    */

    protected $table = 'pengajuan';

    /*
    |--------------------------------------------------------------------------
    | FILLABLE
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'id_penerima',

        'judul',

        'deskripsi',

        'file',

        'status',

    ];
}