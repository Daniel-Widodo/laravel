<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengisiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('pengisians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id')->unsigned();
            $table->char('matakuliah_id',8);
            $table->char('matakuliah',60);
            $table->smallInteger('q1')->default(0);
            $table->smallInteger('q2')->default(0);
            $table->smallInteger('q3')->default(0);
            $table->smallInteger('q4')->default(0);
            $table->smallInteger('q5')->default(0);
            $table->smallInteger('q6')->default(0);
            $table->smallInteger('q7')->default(0);
            $table->smallInteger('q8')->default(0);
            $table->smallInteger('q9')->default(0);
            $table->smallInteger('q10')->default(0);
            $table->boolean('status')->default(0);
        });
        Schema::enableForeignKeyConstraints();

        Schema::table('pengisians', function($table) {
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
        Schema::dropIfExists('pengisians');
        Schema::enableForeignKeyConstraints();
    }
}
