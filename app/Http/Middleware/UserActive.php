<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserActive
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
        if (Auth::user()->active != 1) {
          Session::flash('alert','Akun anda sedang dinonaktifkan. Silakan hubungi administartor anda.');
          Session::flash('alert-class','alert-danger');
          return redirect('/login');
        }
        return $next($request);
    }
}
