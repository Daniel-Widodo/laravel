<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pengisian;
use Faker\Generator as Faker;

$factory->define(Pengisian::class, function (Faker $faker) {
    return [
        //
        'user_id' => '1',
        'matakuliah_id' => $faker->numberBetween($min = 1000, $max = 9000),
        'matakuliah' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'status' => $faker->numberBetween($min = 0, $max = 1),
    ];
});
