<?php

namespace App\Http\Middleware;

use App\Gamedata;
use App\Animal;
use Closure;

class SaillieMiddleware
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
        $jument = Animal::find($request->jument);
        if ($jument->StatutFemelle->date_saillie == Gamedata::date())
        {
            return redirect('home');
        }
        return $next($request);
    }
}
