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
        Schema::create('budgets_mensuels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('mois');
            $table->bigInteger('solde_debut');
            $table->bigInteger('solde_fin');

            $table->mediumInteger('veto_marechal');
            $table->mediumInteger('frais_administratifs');
            $table->mediumInteger('frais_nourriture');
            $table->mediumInteger('frais_engagements');
            $table->bigInteger('achat_foncier');
            $table->mediumInteger('achat_animaux');
            $table->mediumInteger('achat_saillies');
            $table->mediumInteger('gains_concours');
            $table->mediumInteger('vente_saillies');
            $table->mediumInteger('vente_animaux');
            $table->mediuminteger('revenus_externes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets_mensuels');
    }
};
