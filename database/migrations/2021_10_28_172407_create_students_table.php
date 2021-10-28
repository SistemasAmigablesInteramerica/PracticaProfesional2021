<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('genre');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('nationality');
            $table->string('curricular_adequacy');
            $table->boolean('receives_religious_education');
            $table->boolean('receives_sexual_education_and_affection');
            $table->string('email');
            $table->date('registration_date');
            $table->string('phone_number');
            $table->string('home_phone');
            $table->boolean('has_a_dining_scholarship');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
    