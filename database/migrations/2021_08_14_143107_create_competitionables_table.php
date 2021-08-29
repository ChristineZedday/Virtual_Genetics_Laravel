<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitionables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('competition_id')->unsigned();
            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->bigInteger('competitionable_id')->unsigned();
           
            $table->enum('competitionable_type', ['ModeleAllures', 'Dressage', 'CSO']); //MA, dressage; cso...
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
        Schema::dropIfExists('competitionables');
    }
}
