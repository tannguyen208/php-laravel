<?php

namespace App\Http\Middleware;

use Closure;

class productMiddleware
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
        if($request->has('next_p') && $request['next_p'] != "") {
            return $next($request);
        } else {
            return redirect()->route('404');
        }
    }
}
