<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subject_grade_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
            $table->year('year');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('subject_grade_id')->references('id')->on('subject_grades');
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_teachers');
    }
}
