<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_histories', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('grade_subject_teacher_id')->nullable()->unsigned();
            $table->bigInteger('teacher_id')->nullable()->unsigned();
            $table->boolean('attended');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('grade_subject_teacher_id')->references('id')->on('subject_teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_histories');
    }
}
