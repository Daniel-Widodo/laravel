<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\User;

class MahasiswaSeedController extends Controller
{

    public function seed(){
        $path = 'resources\csv\mahasiswa_data_seed.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = User::create([
                    'id' => $value->rec,
                    'name' => $value->name,
                    'email' => $value->email,
                    'nim' => $value->nim,
                    'tl' => $value->tl,
                ]);
            }
        }

        return 'Seeding Berhasil!';
        
    }

    

}
