<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;
// use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;



class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(auth()->user()->is_admin == 1 ){
        //     Auth::logout();
        //     return $next($request);
        // }
        if(Auth::user() && Auth::user()->id == 1)
        {
            return $next($request);
        }
        return redirect('home')->with('error','you have no admin access.');


    }
}
