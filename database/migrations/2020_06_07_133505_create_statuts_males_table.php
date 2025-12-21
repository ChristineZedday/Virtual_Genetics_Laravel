<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatutsMalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuts_males', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('disponible')->default(false);
            $table->boolean('modele15')->default(false);
            $table->boolean('classeNat')->default(false);
            $table->boolean('autorisationSanitaire')->default(false);

            $table->enum('qualite', ['entier','autorisation sanitaire','approuvé', 'approbation provisoire cette année', 'approbation provisoire an prochain','refusé', 'ajourné', 'approuvé an prochain'])->default('entier');
            $table->string('approuvePFS')->default(false);
            $table->tinyInteger('fertilite')->unsigned()->default(100);
            $table->bigInteger('animal_id')->unsigned()->unique();
            $table->mediumInteger('prix')->unsigned()->nullable();
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
        Schema::dropIfExists('statuts_males');
    }
}
