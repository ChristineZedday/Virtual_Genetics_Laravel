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
        Schema::create('reprises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nom');
            $table->enum('categorie', ['club','poney', 'As Poney','amateur', 'pro', 'international']);
            $table->enum('niveau',['4','3','2','1','elite']);
            $table->tinyInteger('taille_min_cm')->unsigned()->default(108);
            $table->tinyInteger('taille_max_cm')->unsigned()->default(149);
            $table->tinyInteger('age_min_administratif')->unsigned()->default(4);
            $table->tinyInteger('niveau_num_global')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reprises');
    }
};
