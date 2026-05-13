<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */

    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        /*
        |--------------------------------------------------------------------------
        | CEK LOGIN
        |--------------------------------------------------------------------------
        */

        if (!Auth::check()) {

            return redirect('/login')
                ->with('error', 'Silahkan login terlebih dahulu.');
        }

        /*
        |--------------------------------------------------------------------------
        | CEK ROLE USER
        |--------------------------------------------------------------------------
        */

        $user = Auth::user();

        if (!in_array($user->role, $roles)) {

            abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
        }

        return $next($request);
    }
}