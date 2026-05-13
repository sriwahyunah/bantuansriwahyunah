<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPengajuan extends Model
{
    protected $table = 'status_pengajuans';

    protected $fillable = [
        'nama_status',
    ];

    public function pengajuans()
    {
        return $this->hasMany(Pengajuan::class);
    }
}