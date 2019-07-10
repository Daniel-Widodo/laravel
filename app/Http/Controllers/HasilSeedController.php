<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Hasil;

class HasilSeedController extends Controller
{

    public function seed(){
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

        return 'Seeding Berhasil!';
        
    }

    

}
