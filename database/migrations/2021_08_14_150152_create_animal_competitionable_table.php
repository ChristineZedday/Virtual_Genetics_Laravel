<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalCompetitionableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_competitionable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('competitionable_id')->unsigned();
            $table->foreign('competitionable_id')->references('id')->on('competitionables');
            $table->bigInteger('animal_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_competitionable');
    }
}
