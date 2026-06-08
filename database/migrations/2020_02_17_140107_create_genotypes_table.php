<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenotypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genotypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('allele_p_id')->unsigned();
            $table->bigInteger('allele_m_id')->unsigned();
            $table->bigInteger('locus_id')->unsigned();
           
            $table->foreign('animal_id')->references('id')->on('animaux');
            $table->foreign('allele_p_id')->references('id')->on('alleles');
            $table->foreign('allele_m_id')->references('id')->on('alleles');
            $table->foreign('locus_id')->references('id')->on('loci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genotypes');
    }
}
