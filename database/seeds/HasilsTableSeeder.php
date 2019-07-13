<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Hasil;

class HasilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'resources\csv\hasil_data_seed.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = Hasil::create([
                    'jurusan' => $value->jurusan,
                    'matakuliah_id' => $value->matakuliah_id,
                    'matakuliah' => $value->matakuliah,
                ]);
            }
        }
    }
}
