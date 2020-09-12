<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {   
        if (! $request->user()->hasRole($role)) {
           //abort(403, “No tienes autorización para ingresar.”);
           return redirect('/1');
        }
    return $next($request);
    }
}