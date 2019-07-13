<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MahasiswasTableSeeder::class);
        $this->call(PengisiansTableSeeder::class);
        $this->call(HasilsTableSeeder::class);
    }
}
