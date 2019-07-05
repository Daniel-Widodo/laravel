<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('matakuliah_id',8);
            $table->char('matakuliah',60);
            $table->char('jurusan',6);
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
            $table->smallInteger('qtot')->default(0);
            $table->smallInteger('qcount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasils');
    }
}
