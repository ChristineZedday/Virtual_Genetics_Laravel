<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('affixe_id')->unsigned()->nullable();
            $table->timestamps();
            $table->string('nom_elevage');
            $table->string('nom_eleveur');
            $table->bigInteger('budget');
            $table->enum('role',['Joueur','Vendeur', 'Acheteur', 'Haras', 'Mort', 'Retraite']);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('affixe_id')->references('id')->on('affixes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elevages');
    }
}
