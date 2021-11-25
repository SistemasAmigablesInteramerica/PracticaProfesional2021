<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->set('speciality', ['hotel_events', 'food_drinks', 'accounting', 'computing', 'occupational_health', 'executive_services']);
            $table->string('card');
            $table->integer('phone_number');
            $table->string('place_residence');
            $table->string('titles');
            $table->boolean('do_work')->nullable();
            $table->boolean('in_empleocr')->nullable();
            $table->text('conditions');
            $table->text('place_likeness');
            $table->set('graduate_status', ['graduate', 'community_member']);
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
        Schema::dropIfExists('employment');
    }
}

