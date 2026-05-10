<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPengajuan extends Model
{
    protected $fillable = [
        'nama_status'
    ];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }
}