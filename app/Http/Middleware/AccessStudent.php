<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Gate::allow('is-student')) {
        return $next($request);
    }
    $request->session()->flash('danger', 'No Entry!!!');
    return redirect('/');
    }
}
