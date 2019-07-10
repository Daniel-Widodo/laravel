<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengisian extends Model
{
    //
    protected $guarded = [
        'id',

    ];

    public $timestamps = false;

    protected $attributes = [
        'q1' => '0',
        'q2' => '0',
        'q3' => '0',
        'q4' => '0',
        'q5' => '0',
        'q6' => '0',
        'q7' => '0',
        'q8' => '0',
        'q9' => '0',
        'q10' => '0',
        'status' => '0',

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
