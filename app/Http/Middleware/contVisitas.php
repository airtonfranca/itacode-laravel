<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\visit;
use App\visit as AppVisit;

class contVisitas
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
        AppVisit::create(['num' => auth()->id()]);
        $id = $request->num;

        return $next($request);
    }
}
