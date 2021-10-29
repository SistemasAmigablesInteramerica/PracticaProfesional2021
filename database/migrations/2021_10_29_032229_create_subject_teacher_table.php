<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->integer('grade');
            $table->string('subjects');
            $table->string('teacher_id');
            $table->timestamps();
            $table->engine = 'innoDB';

            $table->foreign('grade')->references('grade_id')->on('grades');
            $table->foreign('subjects')->references('subject_id')->on('subjects');
            $table->foreign('teacher_id')->references('identification')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_teacher');
    }
}
