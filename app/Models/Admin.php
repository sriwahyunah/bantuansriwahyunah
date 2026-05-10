<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'id_peran',
        'id_alamat',
        'nama',
        'username',
        'password',
        'status',
        'foto'
    ];

    protected $hidden = [
        'password'
    ];
}