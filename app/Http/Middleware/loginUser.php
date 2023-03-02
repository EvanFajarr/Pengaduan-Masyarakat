<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class loginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { if (Auth::check()) {
        if (Auth::user()->rolle == "admin"){
        return redirect('/admin')->with('success', 'Kamu sudah dalam keadaan login!');
    }else if (Auth::user()->rolle == "petugas"){
        return redirect('/home')->with('success', 'Kamu sudah dalam keadaan login!');
    }else if (Auth::user()->rolle == "user"){
        return redirect('/home')->with('success', 'Kamu sudah dalam keadaan login!');
    }
}
        return $next($request);
    }
}
