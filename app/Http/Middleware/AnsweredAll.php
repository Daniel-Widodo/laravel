<?php

namespace App\Http\Middleware;

use Closure;
use App\StudentCourse;

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
        $answered_all = StudentCourse::where('user_id','=',\Auth::user()->id)->
                                    where('questionnaire_status','=','0')->                            
                                    first();

        if (!$answered_all) {
            return redirect('questionnaire/answered_all');
        }
        return $next($request);
    }
}
