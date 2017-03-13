<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class UserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if (Auth::user()->level != $level) {
          return redirect('/');;
        }
        return $next($request);
    }
}
