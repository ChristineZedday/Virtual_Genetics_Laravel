<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom');
            $table->smallInteger('prix_moyen');
            $table->tinyInteger('frais_enregistrement')->unsigned()->nullable();
            $table->tinyInteger('taille_min')->unsigned()->nullable();
            $table->tinyInteger('taille_max')->unsigned()->nullable();
            $table->boolean('approbation')->default(FALSE); //approbation étalons requise
            $table->tinyInteger('pcArabe')->default(0);
            $table->float('pcWelsh')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
