<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom');
            $table->enum('type', ['Modèle et Allures', 'Dressage'])->default('Modèle et Allures');
            $table->tinyInteger('niveau_id')->unsigned();
            $table->mediumInteger('prix_inscription');
            $table->mediumInteger('frais_voyage');
            $table->mediumInteger('prix_premier');
            $table->foreign('niveau_id')->references('id')->on('niveaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
