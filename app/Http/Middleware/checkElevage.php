<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkElevage
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::user()->Elevage)
        {return redirect('home'); }
        
        return $next($request);
    }
}
