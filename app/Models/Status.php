<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'nama_status',
    ];

    public function penerimas()
    {
        return $this->hasMany(Penerima::class);
    }
}