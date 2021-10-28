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
        Schema::create('_teachers', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->String('Nombre');
            $table->String('Primer Apellido');
            $table->string('Segundo Apellido');
            $table->date('Fecha de Nacimiento');
            $table->integer('Edad');
            $table->string('Especialidad');
            $table->string('Correo Electronico');
            $table->string('Sexo Del Docente');
            $table->Integer('Numero De Contacto');
            
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
