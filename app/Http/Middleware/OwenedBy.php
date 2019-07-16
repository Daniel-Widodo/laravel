<?php

namespace App\Http\Middleware;

use Closure;
use App\CourseQuestionnaire;

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
        $owner = CourseQuestionnaire::where('id','=',$request->id)->first()->user_id;
        
        if($owner != \Auth::user()->id)
            redirect('questionnaire/next');

        return $next($request);
    }
}
