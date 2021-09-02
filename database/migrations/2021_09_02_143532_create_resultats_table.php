<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('evenement_id')->unsigned();
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('categorie_id')->unsigned();
            $table->foreign('evenement_id')->references('id')->on('evenements');
            $table->foreign('animal_id')->references('id')->on('animaux');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->TinyInteger('classement')->nullable();
            $table->TinyInteger('note_modele')->nullable();
            $table->TinyInteger('note_allures')->nullable();
            $table->TinyInteger('note_synthèse')->nullable();//vaut aussi pour note dressage ou note comportement en épreuve loisir, ou autre note compétition
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultats');
    }
}
