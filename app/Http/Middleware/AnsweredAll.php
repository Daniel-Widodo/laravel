<?php

namespace App\Http\Middleware;

use Closure;
use App\Pengisian;

class AnsweredAll
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
        $answered_all = Pengisian::where('user_id','=',\Auth::user()->id)->
                                    where('status','=','0')->                            
                                    first();

        if (!$answered_all) {
            return redirect('pengisian/answered_all');
        }
        return $next($request);
    }
}
