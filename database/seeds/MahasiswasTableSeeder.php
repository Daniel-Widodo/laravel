<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MahasiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = factory(App\User::class)->make();

        factory(App\User::class, 10)->create()->each(function ($user) {
            
        });
    }
}
