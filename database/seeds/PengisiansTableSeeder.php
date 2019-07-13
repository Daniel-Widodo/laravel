<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Pengisian;

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
        $path = 'resources\csv\pengisian_data_seed.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = Pengisian::create([
                    'user_id' => $value->user_id,
                    'matakuliah_id' => $value->matakuliah_id,
                    'matakuliah' => $value->matakuliah,
                ]);
            }
        }
    }
}
