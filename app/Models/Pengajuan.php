<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = [
        'penerima_id',
        'jenis_bantuan_id',
        'status_pengajuan_id',
        'judul_pengajuan',
        'keterangan',
        'file_pengajuan',
        'status',
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }

    public function jenisBantuan()
    {
        return $this->belongsTo(JenisBantuan::class);
    }

    public function statusPengajuan()
    {
        return $this->belongsTo(StatusPengajuan::class);
    }

    public function verifikasis()
    {
        return $this->hasMany(Verifikasi::class);
    }
}