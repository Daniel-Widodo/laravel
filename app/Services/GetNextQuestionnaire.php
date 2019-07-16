<?php

namespace App\Services;

use App\StudentCourse;

class GetNextQuestionnaire
{


    public function __construct()
    {

    }

    public function from_id($id)
    {
        $questionnaire = StudentCourse::where('user_id','=',$id)->
                                    where('questionnaire_status','=','0')->
                                    first();
        if($questionnaire)
            return $questionnaire->id;
        
        return null;
    }
}