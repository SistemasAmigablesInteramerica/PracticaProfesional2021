<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeSubjectStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_subject_students', function (Blueprint $table) {
            $table->id();
            $table->integer('grade_id');
            $table->integer('subject_id');
            $table->integer('student_id');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('grade_id')->references('grade_id')->on('grade');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('student_id')->references('student_id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_subject_students');
    }
}
