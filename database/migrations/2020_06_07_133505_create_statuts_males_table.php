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
            $table->boolean('disponible');
            $table->enum('qualite', ['non autorisé','autorisé','approuvé']);
            $table->tinyInteger('fertilite')->unsigned();
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
