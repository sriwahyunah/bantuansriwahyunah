<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    protected $fillable = [
        'pengajuan_id',
        'status',
        'catatan'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}