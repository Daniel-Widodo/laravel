<?php

namespace App\Http\Middleware;

use Closure;
use App\Pengisian;

class OwenedBy
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
        $owner = Pengisian::where('id','=',$request->id)->first()->user_id;
        
        if($owner != \Auth::user()->id)
            redirect('pengisian/next');

        return $next($request);
    }
}
