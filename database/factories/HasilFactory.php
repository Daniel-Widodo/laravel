<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Hasil;
use Faker\Generator as Faker;

$factory->define(Hasil::class, function (Faker $faker) {
    return [
        //
        'matakuliah_id' => Str::random(8),
        'matakuliah' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'jurusan' => $faker->numberBetween(1,5),
        'qcount' => $faker->numberBetween(3,6),
        'qtot' => $faker->numberBetween(15,30),
    ];
});
