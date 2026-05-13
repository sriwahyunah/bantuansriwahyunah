<?php

namespace App\Listeners;

use App\Models\LoginHistory;

class LogSuccessfulLogin
{
    /**
     * Handle login event
     */
    public function handle($event): void
    {
        LoginHistory::create([

            'admin_id'   => $event->user->id,

            'ip_address' => request()->ip(),

            'user_agent' => request()->userAgent(),

            'login_at'   => now(),

        ]);
    }
}