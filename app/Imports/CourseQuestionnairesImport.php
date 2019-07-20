<?php

namespace App\Imports;

use App\CourseQuestionnaire;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CourseQuestionnairesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CourseQuestionnaire([
            //
            'id' => $row['no'],
            'course_id' => $row['course_id'],
            'course_name' => $row['course_name'],
            'study_program' => $row['study_program'],
        ]);
    }
}
