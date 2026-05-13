<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';

    protected $fillable = [
        'id_peran',
        'id_alamat',
        'nama',
        'username',
        'password',
        'status',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
