<?php

namespace App\Imports;

use App\StudentCourse;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentCoursesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new StudentCourse([
            //
            'id' => $row['no'],
            'user_id' => $row['user_id'],
            'course_id' => $row['course_id'],
            'course_name' => $row['course_name'],
        ]);
    }
}
