<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    protected $table = 'penyaluran';

    protected $fillable = [
        'penerima_id',
        'tanggal',
        'jumlah_bantuan',
        'keterangan',
        'bukti',
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }

    public function buktiPenyaluran()
    {
        return $this->hasOne(BuktiPenyaluran::class);
    }
}