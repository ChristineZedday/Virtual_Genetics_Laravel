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
            $table->string('couleur_base')->nullable();
            $table->string('couleur_modif')->nullable();
            $table->string('pathologie_id')->nullable();
            $table->foreign('allele1_id')->references('id')->on('alleles');
            $table->foreign('allele2_id')->references('id')->on('alleles');
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
