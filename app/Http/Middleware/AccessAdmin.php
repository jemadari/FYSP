<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessAdmin
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
        if(Gate::allows('is-admin')) {
            return $next($request);
        }
        $request->session()->flash('danger', 'You don\'t have access to this page');
        return redirect('/');
    }
}
