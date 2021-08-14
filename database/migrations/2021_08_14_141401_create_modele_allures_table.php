<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleAlluresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele_allures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->enum('categorie', ['foal', 'poulain 1 an', 'pouliche 1 an', 'étalon 2 ans', 'pouliche 2 ans', 'étalon 3 ans', 'pouliche 3 ans', 'étalon 4 ans et plus', 'jument suitée']);
            $table->mediumInteger('prix_inscription');
            $table->mediumInteger('prix_premier'); //on fera découler les prix suivants de celui-la

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele_allures');
    }
}
