<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animaux', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom')->nullable();
            $table->bigInteger('affixe_id')->unsigned()->nullable();
            $table->unique(['affixe_id', 'nom']);
            $table->string('couleur')->nullable();
            $table->enum('base',['bai','noir', 'alezan aa', 'alezan agouti'])->nullable();
            $table->tinyInteger('taille_cm')->unsigned()->nullable();
            $table->bigInteger('race_id')->unsigned()->nullable();
            $table->enum('sexe',['jeune poulain', 'jeune pouliche', 'mâle','femelle', 'jeune mâle', 'jeune femelle', 'mâle stérilisé', 'femelle stérilisée', 'vieille femelle', 'vieux mâle', 'vieux mâle stérilisé', 'vieille femelle stérilisée']);
            $table->date('date_achat')->nullable();
            $table->date('date_naissance')->nullable();
            $table->boolean('a_vendre')->default(false);
            $table->bigInteger('prix')->nullable();
            $table->bigInteger('elevage_id')->unsigned();
            $table->foreign('elevage_id')->references('id')->on('elevages')->onUpdate('cascade');
            $table->boolean('fondateur')->default(true);
            $table->boolean('foetus')->default(false);
            $table->float('consang')->default(0);
            $table->bigInteger('sire_id')->unsigned()->nullable();
            $table->bigInteger('dam_id')->unsigned()->nullable();
            $table->foreign('sire_id')->references('id')->on('animaux');
            $table->foreign('dam_id')->references('id')->on('animaux');
            $table->foreign('affixe_id')->references('id')->on('affixes');
            $table->foreign('race_id')->references('id')->on('races');
            $table->tinyInteger('modele_allures')->unsigned()->nullable();
            $table->tinyInteger('modele_allures_additifs')->unsigned()->default(12);
            $table->tinyInteger('capacite_apprentissage_additive')->unsigned()->default(12);
            $table->tinyInteger('capacite_dressage_additive')->unsigned()->default(12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux');
    }
}
