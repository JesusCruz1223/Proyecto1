<?php

namespace App\Http\Middleware;

use Closure;

class EsMayor
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
        if($request->route('mayorEdad') < 18){
            return redirect('frutas');
        }
        return $next($request);
    }
}
