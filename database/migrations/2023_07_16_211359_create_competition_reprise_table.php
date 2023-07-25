<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_reprise', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('competition_id')->unsigned();
            $table->bigInteger('reprise_id')->unsigned();
            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->foreign('reprise_id')->references('id')->on('reprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_reprise');
    }
};
