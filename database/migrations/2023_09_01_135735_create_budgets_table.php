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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('mois');
            $table->foreignId('elevage_id')->constrained();
            $table->bigInteger('solde_debut')->default(20000);
            $table->bigInteger('solde_fin')->nullable();

            $table->mediumInteger('veto_marechal')->nullable();
            $table->mediumInteger('frais_administratifs')->nullable();
            $table->mediumInteger('frais_nourriture')->nullable();
            $table->mediumInteger('frais_engagements')->nullable();
            $table->mediumInteger('frais_transports')->nullable();
            $table->bigInteger('achat_foncier')->nullable();
            $table->mediumInteger('achat_animaux')->nullable();
            $table->mediumInteger('achat_saillies')->nullable();
            $table->mediumInteger('gains_concours')->nullable();
            $table->mediumInteger('vente_saillies')->nullable();
            $table->mediumInteger('vente_animaux')->nullable();
            $table->mediuminteger('revenus_externes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
};
