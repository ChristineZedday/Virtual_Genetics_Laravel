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

            $table->mediumInteger('veto_marechal')->default(0);
            $table->mediumInteger('frais_administratifs')->default(0);
            $table->mediumInteger('frais_nourriture')->default(0);
            $table->mediumInteger('frais_engagements')->default(0);
            $table->mediumInteger('frais_transports')->default(0);
            $table->bigInteger('achat_foncier')->default(0);
            $table->mediumInteger('achat_animaux')->default(0);
            $table->mediumInteger('achat_saillies')->default(0);
            $table->mediumInteger('gains_concours')->default(0);
            $table->mediumInteger('vente_saillies')->default(0);
            $table->mediumInteger('vente_animaux')->default(0);
            $table->mediuminteger('revenus_externes')->default(0);
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
