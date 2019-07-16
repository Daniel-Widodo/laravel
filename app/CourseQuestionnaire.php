<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseQuestionnaire extends Model
{
    //
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    protected $attributes = [
        'question1' => '0',
        'question2' => '0',
        'question3' => '0',
        'question4' => '0',
        'question5' => '0',
        'question6' => '0',
        'question7' => '0',
        'question8' => '0',
        'question9' => '0',
        'question10' => '0',
        'total' => '0',
        'score' => '0.00',
    ];
}
