<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhenotypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phenotypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('allele1_id')->unsigned();
            $table->bigInteger('allele2_id')->unsigned();
            $table->tinyInteger('effet_taille')->nullable();
            $table->tinyInteger('effet_blanc')->nullable();
            
            $table->bigInteger('couleur_id')->unsigned()->nullable();
           
            $table->bigInteger('pathologie_id')->unsigned()->nullable();
            $table->foreign('allele1_id')->references('id')->on('alleles');
            $table->foreign('allele2_id')->references('id')->on('alleles');
            $table->foreign('pathologie_id')->references('id')->on('pathologies');
            $table->foreign('couleur_id')->references('id')->on('couleurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phenotypes');
    }
}
