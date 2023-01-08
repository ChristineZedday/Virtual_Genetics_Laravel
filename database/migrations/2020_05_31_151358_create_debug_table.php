<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('evenement')->nullable();
            $table->string('competition')->nullable();
            $table->string('categorie')->nullable();
            $table->string('cheval')->nullable();
            $table->string('note')->nullable();
            $table->string('classement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debugs');
    }
}
