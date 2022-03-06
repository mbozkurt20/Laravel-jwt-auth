<?php

namespace App\Http\Middleware;

use App\CustomClass\MyResponse;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StationOwner
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::user()->hasRole('station.owner')) {
           return MyResponse::error('Hesabınızın yetkisi istasyon sahibi olmadığından bu işlemi gerçekleştiremezsiniz!',401);
        }
        return $next($request);
    }
}
