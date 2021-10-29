<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_history', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('student_id');
            $table->string('grade_subject_teacher');
            $table->integer('teacher_id');
            $table->boolean('attended');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('grade_subject_teacher')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_history');
    }
}
