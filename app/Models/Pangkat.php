<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $table = 'pangkats';

    protected $fillable = [
        'nama_pangkat',
    ];

    public function penerimas()
    {
        return $this->hasMany(Penerima::class);
    }
}