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
            $table->string('couleur')->nullable();
            $table->tinyInteger('taille_cm')->unsigned()->nullable();
            $table->string('race');
            $table->string('sexe');
            $table->date('date_achat')->nullable();
            $table->date('date_naissance')->nullable();
            $table->boolean('a_vendre')->default(false);
            $table->bigInteger('prix')->nullable();
            $table->bigInteger('elevage_id')->unsigned();
            $table->foreign('elevage_id')->references('id')->on('elevages');
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
