<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->smallInteger('sante');
            $table->bigInteger('animal_id')->unsigned();
            $table->tinyInteger('niveau_id')->unsigned();
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->foreign('animal_id')->references('id')->on('animaux');
            $table->tinyInteger('niveau_dressage')->default(1);
            $table->tinyInteger('pourcent_niveau')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performances');
    }
}
