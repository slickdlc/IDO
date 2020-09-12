<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $uri=$request->path();
        if(substr($uri,0,5)=="admin"){
           return route('adminLogin');
        }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
