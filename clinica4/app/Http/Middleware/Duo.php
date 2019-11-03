<?php

namespace App\Http\Middleware;
use App\Head;
use Illuminate\Support\Facades\Auth;

use Closure;

class Duo
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
        $head=Head::whereUserId(Auth::id())->whereRole('admin')->first();

        if(!empty($head)){
            return redirect('dashboard');
        }
        return $next($request);
    }
}
