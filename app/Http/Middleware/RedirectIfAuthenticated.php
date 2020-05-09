<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->traducteur == 'traducteur')
            {
                return redirect('/traducteur');
            }
            elseif(Auth::user()->traducteur=='admin')
            {
                return redirect('/admin');
            }
            else
            {
                return redirect('/client');
            }
        }

        /*if (Auth::user()->bloque==1){
            return redirect('/home');
        }else {
            return redirect()
        }*/

        return $next($request);
    }
}
