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
            $table->string('nationality');
            $table->integer('card');
            $table->date('birthdate');
            $table->binary('salarial_constance')->nullable();
            $table->string('legal_guardian_name');
            $table->integer('legal_guardian_card');
            $table->string('place_residence');
            $table->string('phone_number');
            $table->set('socioeconomic_status', ['extreme_poverty', 'poverty', 'vulnerability', 'not_poor']);
            $table->integer('total_income_family');
            $table->integer('family_member_total');
            $table->decimal('total_per_capita');
            $table->boolean('clasification')->nullable();
            $table->decimal('financial_assistance')->nullable();
            $table->decimal('voluntary_assistance')->nullable();
            $table->decimal('rental_income')->nullable();
            $table->decimal('others_income')->nullable();
            $table->decimal('total_income');
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
