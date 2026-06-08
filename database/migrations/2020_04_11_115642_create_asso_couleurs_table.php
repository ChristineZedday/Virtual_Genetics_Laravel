<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssoCouleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asso_couleurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('couleur_res_id')->unsigned();
            $table->bigInteger('couleur1_id')->unsigned();
            $table->bigInteger('couleur2_id')->unsigned();
            $table->foreign('couleur_res_id')->references('id')->on('couleurs');
            $table->foreign('couleur1_id')->references('id')->on('couleurs');
            $table->foreign('couleur2_id')->references('id')->on('couleurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asso_couleurs');
    }
}
