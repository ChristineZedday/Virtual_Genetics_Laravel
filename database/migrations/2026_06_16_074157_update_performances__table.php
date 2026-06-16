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
         Schema::table('performances', function (Blueprint $table) {
            
            $table->boolean('label_dressage')->default(0)->nullable();
            $table->float('IDR_cheval')->default(0)->nullable();
            $table->float('IDR_poney')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
