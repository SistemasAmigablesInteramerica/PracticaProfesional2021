<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            
            $table->id();
            $table->String('Names');
            $table->String('Last_Names');
            $table->integer('Identification');
            $table->date('Birthdate');
            $table->integer('Age');
            $table->string('Specialty');
            $table->string('Email');
            $table->string('Gender');
            $table->Integer('Contact_number');
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
        Schema::dropIfExists('teachers');
    }
}
