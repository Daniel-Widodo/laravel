<?php

use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\StudentCourse;
use App\Imports\StudentCoursesImport;

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
        $path = '\csv\student_courses_seed.csv';

        Excel::import(new StudentCoursesImport, $path);
    }
}
