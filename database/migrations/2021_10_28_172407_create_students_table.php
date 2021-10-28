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
            $table->string('nacionality');
            $table->string('curricular adequacy');
            $table->boolean('receives religious education');
            $table->boolean('receives sexual education and affection');
            $table->string('email');
            $table->date('registration date');
            $table->string('phone number');
            $table->string('home phone');
            $table->boolean('has a dining scholarship');
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
    