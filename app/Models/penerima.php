<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Penerima extends Authenticatable
{
    use Notifiable;

    protected $table = 'penerima';

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}