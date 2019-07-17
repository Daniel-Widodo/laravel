<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(StudentCoursesTableSeeder::class);
        $this->call(CourseQuestionnairesTableSeeder::class);
        $this->call(CheckActiveUsersTableSeeder::class);
    }
}
