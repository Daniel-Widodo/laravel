<?php

use Illuminate\Database\Seeder;

class PengisiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pengisian = factory(App\Pengisian::class)->make();

        factory(App\Pengisian::class, 7)->create()->each(function ($pengisian) {
            
        });
    }
}
