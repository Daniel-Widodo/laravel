<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\User;

class MahasiswaSeedController extends Controller
{

    public function seedMahasiswa(){
        $path = 'resources\csv\mahasiswa.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = User::create([
                    'name' => $value->nama,
                    'email' => $value->email,
                    'nim' => $value->nim,
                    'tl' => $value->tl,
                ]);
            }

 
        }

        return $user;
        
    }

    

}
