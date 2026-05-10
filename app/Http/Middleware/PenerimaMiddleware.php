<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PenerimaMiddleware
{
    /**
     * HANDLE ACCESS HANYA UNTUK PENERIMA
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === 'penerima') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Akses ditolak');
    }
}