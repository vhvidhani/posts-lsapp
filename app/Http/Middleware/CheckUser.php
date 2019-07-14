<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
        //return $request;
        echo $request->username;
        if ($request->username == 'vishakha') {
            $user=$request->username == 'vishakha';
            return $next($request);
        }
        else{
            return redirect('/login');
        }
        //echo 'middleware is there';
        
    }
}
