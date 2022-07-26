<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class customermiddleware
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
        if(!$request->session()->get('usertype'))
        {
            return redirect()->route('login');
        }
        else if(!$request->session()->get('usertype')=='admin')
        {
            return redirect()->route('admin.home');
        }
        else if(!$request->session()->get('usertype')=='manager')
        {
            return redirect()->route('manager.home');
        }
        else if(!$request->session()->get('usertype')=='staff')
        {
            return redirect()->route('staff.home');
        }
        else
        {
            return $next($request);
        }
    }
}
