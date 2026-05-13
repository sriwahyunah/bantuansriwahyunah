<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuktiPenyaluran extends Model
{
    protected $table = 'bukti_penyalurans';

    protected $fillable = [
        'penyaluran_id',
        'foto_bukti',
        'keterangan',
    ];

    public function penyaluran()
    {
        return $this->belongsTo(Penyaluran::class);
    }
}