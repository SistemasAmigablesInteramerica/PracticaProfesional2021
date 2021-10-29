<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_grade', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grade_id')->unsigned();
            $table->bigInteger('subject_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_grade');
    }
}
