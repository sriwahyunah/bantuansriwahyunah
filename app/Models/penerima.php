<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Penerima extends Authenticatable
{
    use HasFactory;

    protected $table = 'penerima';

    protected $fillable = [
        'nama',
        'nik',
        'email',
        'password',
        'foto'
    ];

    protected $hidden = [
        'password',
    ];
}