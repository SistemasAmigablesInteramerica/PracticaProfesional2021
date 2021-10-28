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
<<<<<<< HEAD:database/migrations/2021_10_28_024200_create__teachers_table.php
            $table->String('Names');
            $table->String('Last_Names');
            $table->date('Birthdate');
            $table->integer('Age');
            $table->string('Specialty');
            $table->string('Email');
            $table->string('Gender');
            $table->Integer('Contact_number');
=======
>>>>>>> df393686e81962bfda12b713c880361cadad6708:database/migrations/2021_10_28_024200_create_teachers_table.php
            $table->timestamps();
            $table->engine - 'innoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_teachers');
    }
}
