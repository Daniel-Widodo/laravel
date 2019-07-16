<?php

namespace App\Listeners;

use App\Events\QuestionerAnswered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\CourseQuestionnaire;

class CalculateFinalResult
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuestionerAnswered  $event
     * @return void
     */
    public function handle(QuestionerAnswered $event)
    {
        $studentCourse = $event->studentCourse;
        
        $hasil = CourseQuestionnaire::where('course_id','=',$studentCourse->course_id)->first();
        $hasil->fill([
            'question1' => $studentCourse->question1 + $hasil->question1,
            'question2' => $studentCourse->question2 + $hasil->question2,
            'question3' => $studentCourse->question3 + $hasil->question3,
            'question4' => $studentCourse->question4 + $hasil->question4,
            'question5' => $studentCourse->question5 + $hasil->question5,
            'question6' => $studentCourse->question6 + $hasil->question6,
            'question7' => $studentCourse->question7 + $hasil->question7,
            'question8' => $studentCourse->question8 + $hasil->question8,
            'question9' => $studentCourse->question9 + $hasil->question9,
            'question10' => $studentCourse->question10 + $hasil->question10,
            'number_answered' => $hasil->number_answered + 1,
        ]);
        $hasil->score = (
            $hasil->question1 +
            $hasil->question2 +
            $hasil->question3 +
            $hasil->question4 +
            $hasil->question5 +
            $hasil->question6 +
            $hasil->question7 +
            $hasil->question8 +
            $hasil->question9 +
            $hasil->question10) / $hasil->number_answered / 10;
        return $hasil->save();
    }
}
