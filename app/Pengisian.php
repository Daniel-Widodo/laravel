<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengisian extends Model
{
    //
    protected $guarded = [
        'user_id','matakuliah_id','matakuliah','report_id',

    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
