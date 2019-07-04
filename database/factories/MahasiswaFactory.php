<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
        'password' => bcrypt('1234'),
        'nim' => $faker->unique()->numberBetween(16043079101,16043079399),
        'tl'=> $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
