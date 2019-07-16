<?php

namespace App\Http\Middleware;

use Closure;
use App\StudentCourse;

class CheckActiveStudent
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

        $active = StudentCourse::where('user_id','=',\Auth::user()->id)->first();

        if (!$active) {
            return redirect('questionnaire/not_active');
        }
        
        return $next($request);
    }
}
