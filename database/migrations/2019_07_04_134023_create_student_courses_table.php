<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('student_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->char('course_id',8);
            $table->char('course_name',60);
            $table->smallInteger('question1')->default(0);
            $table->smallInteger('question2')->default(0);
            $table->smallInteger('question3')->default(0);
            $table->smallInteger('question4')->default(0);
            $table->smallInteger('question5')->default(0);
            $table->smallInteger('question6')->default(0);
            $table->smallInteger('question7')->default(0);
            $table->smallInteger('question8')->default(0);
            $table->smallInteger('question9')->default(0);
            $table->smallInteger('question10')->default(0);
            $table->char('semester',5)->default(20182);
            $table->boolean('questionnaire_status')->default(0);
        });
        Schema::enableForeignKeyConstraints();

        Schema::table('student_courses', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('student_courses');
        Schema::enableForeignKeyConstraints();
    }
}
