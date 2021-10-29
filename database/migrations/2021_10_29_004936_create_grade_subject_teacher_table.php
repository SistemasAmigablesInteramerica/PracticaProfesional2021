<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeSubjectTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->string('subjects');
            $table->string('teacher_id');
            $table->timestamps();
            $table->engine = 'innoDB';

            $table->foreign('grade')->references('grade_id')->on('grade');
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
        Schema::dropIfExists('grade_subject_teacher');
    }
}
