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
        Schema::table('animaux', function (Blueprint $table) {
            $table->string('statut_administratif')->default('enregistré');
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
            $table->dropColumn('statut_administratif');
         });
    }
};
