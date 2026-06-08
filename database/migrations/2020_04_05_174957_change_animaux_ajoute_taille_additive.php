<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAnimauxAjouteTailleAdditive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animaux', function (Blueprint $table) {
           $table->tinyInteger('taille_additive')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animaux', function (Blueprint $table) {
           $table->dropColumn('taille_additive');
        });
    }
}
