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
            $table->boolean('sexe')->nullable();
            $table->tinyInteger('age_min')->unsigned()->nullable();
            $table->tinyInteger('age_max')->unsigned()->nullable();
            $table->tinyInteger('taille_min')->unsigned()->nullable();
            $table->tinyInteger('taille_max')->unsigned()->nullable();
            $table->boolean('saillie')->nullable();
            $table->boolean('suitee')->nullable();
            $table->boolean('entier')->nullable();
            $table->boolean('autorise')->nullable();
            $table->boolean('approuve')->nullable();
          

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
