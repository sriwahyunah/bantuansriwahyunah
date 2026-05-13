<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    protected $table = 'login_histories';

    protected $fillable = [

        'admin_id',
        'ip_address',
        'user_agent',
        'login_at',

    ];

    /**
     * Relasi ke admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}