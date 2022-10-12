<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;

use Closure;
use Session;
use Illuminate\Http\Request;

class admin_auth
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
    // if($request->session()->has('Admin_login')){



    // }
    // else{
    //     $request->session()->flash('errors','Access Denied');
    //     return redirect('login');
    // }


           return $next($request);
    }
}
