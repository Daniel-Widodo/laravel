<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'password' => '$2y$10$NkSM3ydbc5Cuq5PUJmIXhu33mkW3o/kKaR6MuD6TFVblLBhkilRfq', //1234
        'birthdate' => '1995-01-01',
        'questionnaire_status' => '0',
    ];



    /**
     * RELASI
     * memiliki relasi dengan pengisian
     * 
     */
    public function pengisian()
    {
        return $this->hasMany('App\Pengisian');
    }
}
