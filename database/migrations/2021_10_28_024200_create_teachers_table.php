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
            $table->String('names');
            $table->String('last_names');
            $table->integer('identification');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('specialty');
            $table->string('email');
            $table->string('gender');
            $table->Integer('contact_number');
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
