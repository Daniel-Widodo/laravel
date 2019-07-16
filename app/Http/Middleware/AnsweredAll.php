<?php

namespace App\Http\Middleware;

use Closure;
use App\StudentCourse;
use App\User;

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
        $next_questionnaire = resolve('GetNextQuestionnaire')->from_id(\Auth::user()->id);

        if (!$next_questionnaire) {
            $user = User::find(\Auth::user()->id);
            $user->questionnaire_status = 1;
            $user->save();

            return redirect('questionnaire/answered_all');
        }
        return $next($request);
    }
}
