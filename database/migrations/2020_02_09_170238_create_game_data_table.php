<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamedatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->mediumInteger('budget');
            $table->date('date_courante');
            $table->string('lettre')->default('E');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamedatas');
    }
}
