<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    protected $fillable = [
        'pengajuan_id',
        'tanggal_penyaluran',
        'status'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }

    public function bukti()
    {
        return $this->hasOne(BuktiPenyaluran::class);
    }
}