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
            $table->enum('type', ['Modèle et Allures Tous', 'Modèle et Allures Dressage','Dressage poneys', 'Dressage chevaux', 'Dressage poneys E', 'Modèle et Allures mâles', 'Modèle et Allures femelles', 'Modèle et Allures jeunes'])->default('Modèle et Allures Tous');
           // $table->tinyInteger('niveau_id')->unsigned();
            $table->mediumInteger('prix_inscription');
            $table->mediumInteger('prix_premier');
            $table->boolean('qualificatif');
           // $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->bigInteger('race_id')->unsigned()->nullable();
            $table->foreign('race_id')->references('id')->on('races');
              $table->boolean('tous_poneys_sport')->default(0)->nullable();
            $table->boolean('tous_chevaux_sport')->default(0)->nullable();
           
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
