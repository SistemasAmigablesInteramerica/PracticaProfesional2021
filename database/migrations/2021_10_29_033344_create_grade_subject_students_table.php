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
            $table->bigInteger('subject_grade_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->year('year');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('subject_grade_id')->references('id')->on('subject_grades');
            $table->foreign('student_id')->references('id')->on('students');
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
