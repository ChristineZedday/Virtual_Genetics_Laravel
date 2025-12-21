<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveaux', function (Blueprint $table) {
            $table->tinyInteger('id')->unsigned()->autoIncrement
            ();
            $table->timestamps();
            $table->String('libelle');
            $table->Boolean('open_before');
            $table->Boolean('open_after');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveaux');
    }
}
