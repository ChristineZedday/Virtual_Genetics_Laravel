<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalPathologieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_pathologie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('pathologie_id')->unsigned();
            
            $table->timestamps();
            $table->foreign('animal_id')->references('id')->on('animaux');
            $table->foreign('pathologie_id')->references('id')->on('pathologies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_pathologie');
    }
}
