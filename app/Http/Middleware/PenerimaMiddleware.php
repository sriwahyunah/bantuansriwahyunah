<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PenerimaMiddleware
{
    /**
     * Handle an incoming request.
     */

    public function handle(Request $request, Closure $next): Response
    {
        /*
        |--------------------------------------------------------------------------
        | CEK LOGIN PENERIMA
        |--------------------------------------------------------------------------
        */

        if (!Auth::guard('penerima')->check()) {

            return redirect('/login-penerima')
                ->with('error', 'Silahkan login sebagai penerima.');
        }

        return $next($request);
    }
}