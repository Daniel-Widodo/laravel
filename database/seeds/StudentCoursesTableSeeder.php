<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\StudentCourse;

class StudentCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = 'resources\csv\student_courses_seed.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = StudentCourse::create([
                    'user_id' => $value->user_id,
                    'course_id' => $value->course_id,
                    'course_name' => $value->course_name,
                ]);
            }
        }
    }
}
