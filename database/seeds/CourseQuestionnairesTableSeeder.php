<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\CourseQuestionnaire;

class CourseQuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'resources\csv\courses_questionnaire_seed.csv';

        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value){
                
                $user = CourseQuestionnaire::create([
                    'study_program' => $value->study_program,
                    'course_id' => $value->course_id,
                    'course_name' => $value->course_name,
                ]);
            }
        }
    }
}
