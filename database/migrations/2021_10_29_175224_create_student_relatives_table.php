<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_relatives', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('guardian_name');
            $table->integer('guardian_id');
            $table->string('guaridan_profession');
            $table->string('guardian_relation');
            $table->boolean('guardian_receives_aid');
            $table->decimal('guardian_aid_total');
            $table->decimal('guardian_salary');
            $table->timestamps();
            $table->engine = 'InnoDB';

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
        Schema::dropIfExists('student_relatives');
    }
}
