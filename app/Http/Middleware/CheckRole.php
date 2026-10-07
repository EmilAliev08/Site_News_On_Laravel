<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! $request->user()->roles()->where('name', $role)->exists()) {
            return redirect('/')->with(
                'error',
                'У вас нет прав для доступа к этому разделу.'
            );
        }

    
        return $next($request);
    }
}
