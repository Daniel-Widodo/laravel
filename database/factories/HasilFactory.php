<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Hasil;
use Faker\Generator as Faker;

$factory->define(Hasil::class, function (Faker $faker) {

    $qcount = $faker->numberBetween(3,9);
    $qavg = $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 5);
    $qtot = floor($qavg * $qcount);
    $qavg = number_format($qtot/$qcount, 2);

    return [
        //
        'matakuliah_id' => Str::random(8),
        'matakuliah' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'jurusan' => $faker->numberBetween(1,5),
        'qcount' => $qcount,
        'qtot' => $qtot,
        'qavg' => $qavg,
    ];
});
