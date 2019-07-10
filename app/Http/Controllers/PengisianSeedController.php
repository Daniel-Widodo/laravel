<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Pengisian;

class PengisianSeedController extends Controller
{

    public function seed(){
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

        return 'Seeding Berhasil!';
        
    }

    

}
