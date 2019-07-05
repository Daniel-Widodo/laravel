<?php

use Illuminate\Database\Seeder;

class HasilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hasil = factory(App\Hasil::class)->make();

        factory(App\Hasil::class, 10)->create()->each(function ($hasil) {
            
        });
    }
}
