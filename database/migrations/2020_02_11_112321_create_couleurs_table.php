<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couleurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
          
            $table->boolean('base_couleur')->nullable();
            $table->boolean('est_motif')->nullable();
            $table->boolean('est_dilution')->nullable();
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
        Schema::dropIfExists('couleurs');
    }
}
