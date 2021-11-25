<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom');
            $table->enum('type',['Modèle et Allures Race', 'loisir', 'Modèle et Allures dressage', 'Modèles et Allures CSO'])->nullable();
            $table->enum('sexe',['mâle','femelle'] )->nullable();
            $table->tinyInteger('age_min')->unsigned()->nullable();
            $table->tinyInteger('age_max')->unsigned()->nullable();
            $table->tinyInteger('taille_min')->unsigned()->nullable();
            $table->tinyInteger('taille_max')->unsigned()->nullable();
            $table->boolean('saillie')->nullable();
            $table->boolean('suitee')->nullable();
            $table->boolean('entier')->nullable();
            $table->boolean('autorisé')->nullable();
            $table->boolean('approuvé')->nullable();
            $table->bigInteger('race_id')->unsigned()->nullable();
            $table->foreign('race_id')->references('id')->on('races');
            $table->smallInteger('prix_inscription')->unsigned()->nullable();
            $table->MediumInteger('prix_premier')->unsigned()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
