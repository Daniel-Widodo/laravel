<?php

namespace App\Http\Middleware;

use Closure;
use App\StudentCourse;

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
        $owner = StudentCourse::where('id','=',$request->id)->first()->user_id;
        
        if($owner != \Auth::user()->id)
            return redirect('questionnaire/'.resolve('GetNextQuestionnaire')->from_id(\Auth::user()->id) )->
                            with('status', 'Halaman yang anda maksud tidak tersedia!'); //next

        return $next($request);
    }
}
