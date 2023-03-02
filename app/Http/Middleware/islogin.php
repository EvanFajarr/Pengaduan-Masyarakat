<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class islogin
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
        if (Auth::guard('Petugas15467')->check() ) {
            return redirect('home')->with('success', 'Kamu sudah dalam keadaan login!');
        }else if(Auth::guard('user')->check() ){
            return redirect('admin')->with('success', 'Kamu sudah dalam keadaan login!');
        }else{
            return $next($request);
        }
       
        // || Auth::guard('user')->check()
    }
    }

