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
        Schema::create('rendements', function (Blueprint $table) {
            $table->id();
            $table->enum('mois', [1,2,3,4,5,6,7,8,9,10,11,12]);
            $table->float('ha_par_UGB',3, 2);
            $table->float('foin_tMS_ha',3,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendements');
    }
};
