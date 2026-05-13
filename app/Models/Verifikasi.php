<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    protected $table = 'verifikasis';

    protected $fillable = [
        'pengajuan_id',
        'user_id',
        'status_verifikasi',
        'catatan',
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}