<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAnimauxAjouteMA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animaux', function (Blueprint $table) {
        $table->tinyInteger('modele_allures')->unsigned()->default(12);
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
            $table->dropColumn('modele_allures');
         });
    }
}
