<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBantuan extends Model
{
    protected $table = 'detail_bantuan';

    protected $fillable = [
        'id_bantuan',
        'id_penerima',
        'jumlah',
        'status'
    ];
}