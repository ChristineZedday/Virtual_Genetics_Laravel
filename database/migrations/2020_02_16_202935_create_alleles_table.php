<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alleles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('locus_id')->unsigned();
            $table->string('nom');
            $table->string('abbr');
            $table->boolean('is_default')->default(false);
            $table->boolean('is_dominant')->default(false);
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
        Schema::dropIfExists('alleles');
    }
}
