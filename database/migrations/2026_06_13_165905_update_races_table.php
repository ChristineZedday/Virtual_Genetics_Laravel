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
        Schema::table('races', function (Blueprint $table) {
            $table->boolean('confirmation_juments')->default(FALSE)->nullable();
            $table->float('pclusitanien')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('races', function (Blueprint $table) {
            $table->dropColumn('confirmation_juments')->default(FALSE);
            $table->dropColumn('pclusitanien')->default(0);
        });
    }
};
