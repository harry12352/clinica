<?php

namespace App\Http\Middleware;
Use App\Patient;
use Illuminate\Support\Facades\Auth;

use Closure;

class ApointmentMiddleware
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



 $pat=Patient::whereUserId(Auth::id())->first();


         if(empty($pat)){
        return redirect('notlogin');
        }
        return $next($request);
      
        
}
}