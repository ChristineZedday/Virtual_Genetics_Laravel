<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatutsfemellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statutsfemelles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('animal_id')->unsigned()->unique();
            $table->tinyInteger('fertilite')->unsigned()->default(100);
            $table->boolean('pres_pleine')->default(false);
            $table->boolean('conf_pleine')->default(false);
            $table->boolean('suitee')->default(false);
            $table->boolean('vide')->default(true);
            $table->boolean('conf_vide')->default(false);
            $table->bigInteger('etalon_id')->unsigned()->nullable()->default(null);
            $table->date('terme')->nullable();
            $table->date('date_saillie')->nullable();
            $table->foreign('animal_id')->references('id')->on('animaux'); //la jument
            $table->foreign('etalon_id')->references('id')->on('animaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statutsfemelles');
    }
}
