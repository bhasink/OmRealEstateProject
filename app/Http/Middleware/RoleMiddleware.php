<?php

namespace Omaxe\Http\Middleware;

use Closure;
use Auth;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::check() && Auth::user()->role =='SeoAdmin') {
            return $next($request);
        }else if( Auth::check() && Auth::user()->role =='SuperAdmin'){
            return $next($request);
        }
        return redirect('/omaxeadmin');
    }
}