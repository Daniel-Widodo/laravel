<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\User;

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
        $path = 'resources\csv\user_seed.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = User::create([
                    'id' => $value->rec,
                    'name' => $value->name,
                    'email' => $value->email,
                    'registration_number' => $value->registration_number,
                    'birthdate' => $value->birthdate,
                ]);
            }
        }
    }
}
