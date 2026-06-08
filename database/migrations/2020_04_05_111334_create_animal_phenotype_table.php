<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalPhenotypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_phenotype', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('phenotype_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animaux');
            $table->foreign('phenotype_id')->references('id')->on('phenotypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_phenotype');
    }
}
