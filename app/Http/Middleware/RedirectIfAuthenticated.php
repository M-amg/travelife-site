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
        switch ($guard){
            case 'web':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('Admin');
                }
                break;
            case 'agent':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('devis.home');
                }
                break;
            case 'customer':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('customer.home');
                }
                break;
        }
        return $next($request);
    }
}
