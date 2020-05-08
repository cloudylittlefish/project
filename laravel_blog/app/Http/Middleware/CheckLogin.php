<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
        if(!auth()->check()){
            session()->flush();
            return redirect()->route('admin.login.index')->withErrors(['errors'=>'请先登录！']);
        }
        return $next($request);
    }
}
