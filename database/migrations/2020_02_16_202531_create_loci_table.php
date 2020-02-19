<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLociTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loci', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('espece_id');
            $table->string('nom');
            $table->string('abbrev');
            $table->string('chromosome')->nullable();
            $table->bigInteger('next_linked_id')->unsigned()->nullable();
            $table->bigInteger('prev_linked_id')->unsigned()->nullable();
            $table->float('taux_recomb_next')->nullable();
            // $table->foreign('next_linked_id')->references('id')->on('loci');
            // $table->foreign('prev_linked_id')->references('id')->on('loci');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loci');
    }
}
