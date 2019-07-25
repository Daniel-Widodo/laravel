<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CourseQuestionnairesImport;
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
        $path = '\csv\courses_questionnaire_seed.csv';

        Excel::import(new CourseQuestionnairesImport, $path);
    }
}
