<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_questionnaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('course_id',8);
            $table->char('course_name',60);
            $table->enum('study_program', ['di', 'dkv', 'dkf', 'tpb', 'umum']);
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
            $table->smallInteger('total')->default(0);
            $table->integer('number_answered')->default(0);
            $table->decimal('score', 3, 2)->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_questionnaires');
    }
}
