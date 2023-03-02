<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class unlogin
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
        //   if (Auth::check()) {
        //     return redirect('/')->withErrors('Silakan login terlebih dahulu');
        // }else{
        //          return $next($request);
        //         }
      
    
   // }
    if (Auth::guard('Petugas15467')->check() ) {
        return redirect('')->withErrors('Silakan login terlebih dahulu');
    }else if(Auth::guard('user')->check() ){
        return redirect('')->withErrors('Silakan login terlebih dahulu');
    }else{
        return $next($request);
    }
}
}