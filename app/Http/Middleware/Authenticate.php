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
        if (! $request->expectsJson()) {
            switch($request->route()->getDomain()){
                case parse_url(env('APP_ADMIN_URL'))['host']:
                    return route('admin.login');
                    break;
                case parse_url(env('APP_URL'))['host']:
                    return route('login');
                    break;
            }
        }
    }
}
