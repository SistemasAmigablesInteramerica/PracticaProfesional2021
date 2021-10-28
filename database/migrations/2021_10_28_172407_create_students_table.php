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
            $table->string('primer nombre');
            $table->string('primer apellido');
            $table->string('segundo apellido');
            $table->string('sexo del estudiante');
            $table->date('fecha de nacimiento');
            $table->integer('edad del estudiante');
            $table->string('nacionalidad');
            $table->string('adecuacion curricular');
            $table->boolean('recibe educacion religiosa');
            $table->boolean('recibe educaciion sexual y afectividad');
            $table->string('correo electronico');
            $table->date('fecha de registro');
            $table->timestamps();
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
    