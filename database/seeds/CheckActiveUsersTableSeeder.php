<?php

use Illuminate\Database\Seeder;
use App\User;

class CheckActiveUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $active = User::has('studentCourse')->pluck('id');
        User::whereIn('id', $active)->update(['active_status' => 1]);
    }
}
