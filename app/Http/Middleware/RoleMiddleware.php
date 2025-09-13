<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = $request->user();

        if (!$user) {
            // kalau belum login
            return redirect()->route('login');
        }

        // cek berdasarkan helper role di model
        if ($role === 'admin' && !$user->isAdmin()) {
            abort(403, 'Unauthorized');
        }

        if ($role === 'pengurus' && !$user->isPengurus()) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
