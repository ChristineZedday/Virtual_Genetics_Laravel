<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalCouleurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_couleur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('couleur_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animaux');
            $table->foreign('couleur_id')->references('id')->on('couleurs');
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
        Schema::dropIfExists('animal_couleur');
    }
}
