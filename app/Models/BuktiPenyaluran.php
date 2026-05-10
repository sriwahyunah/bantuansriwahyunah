<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuktiPenyaluran extends Model
{
    protected $fillable = [
        'penyaluran_id',
        'foto',
        'keterangan'
    ];

    public function penyaluran()
    {
        return $this->belongsTo(Penyaluran::class);
    }
}