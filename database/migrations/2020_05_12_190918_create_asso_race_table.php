<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssoRaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asso_race', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('race_pere_id')->unsigned()->nullable();
            $table->bigInteger('race_mere_id')->unsigned()->nullable();
            $table->bigInteger('race_produit_id')->unsigned();
            $table->boolean('taille_conditions')->default(FALSE);
            $table->boolean('automatique')->default(FALSE);
            $table->string('commentaire')->nullable();
            $table->boolean('approbation')->default(FALSE);
           
            $table->foreign('race_pere_id')->references('id')->on('races');
            $table->foreign('race_mere_id')->references('id')->on('races');
            $table->foreign('race_produit_id')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asso_race');
    }
}
