<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = ['nama'];

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'kategori_id');
    }
}