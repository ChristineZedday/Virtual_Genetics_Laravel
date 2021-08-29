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
            $table->bigInteger('concours_id')->unsigned();
            $table->foreign('concours_id')->references('id')->on('concours');
            $table->enum('sexe',['jeune poulain', 'jeune pouliche', 'mâle','femelle', 'jeune mâle', 'jeune femelle',  'vieille femelle', 'vieux mâle'] )->nullable();
            $table->enum('ageYears', ['0', '1', '2', '3', '4', '>4'])->nullable();
            $table->bigInteger('race_id')->unsigned()->nullable();
            $table->foreign('race_id')->references('id')->on('races');
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
