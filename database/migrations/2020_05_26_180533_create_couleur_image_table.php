<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouleurImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couleur_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('couleur_id')->unsigned();
            $table->bigInteger('image_id')->unsigned();
            $table->timestamps();
            $table->foreign('couleur_id')->references('id')->on('couleurs');
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couleur_image');
    }
}
