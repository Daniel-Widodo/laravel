<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Concerns\ToModel;
use App\User;
use App\Imports\UsersImport;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = '\csv\user_seed.csv';

        Excel::import(new UsersImport, $path);
    }
}
