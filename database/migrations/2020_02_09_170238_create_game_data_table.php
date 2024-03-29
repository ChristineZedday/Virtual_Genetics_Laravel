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
            $table->date('date_debut');
            $table->string('lettre')->default('E');
            $table->boolean('terres')->default(FALSE);
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
