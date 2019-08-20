<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->integer('alim_grp_code');
            $table->integer('alim_ssgrp_code');
            $table->integer('alim_ssssgrp_code');
            $table->string('alim_grp_nom_fr');
            $table->string('alim_ssgrp_nom_fr');
            $table->string('alim_ssssgrp_nom_fr');
            $table->integer('alim_code');
            $table->string('alim_nom_fr');
            $table->string('Energie_Règlement_UE_N°_11692011_kcal100g');
            $table->string('Energie_N_x_facteur_Jones_avec_fibres_kJ100g');
            $table->string('Energie_N_x_facteur_Jones_avec_fibres_kcal100g');
            $table->string('Protéines_g100g');
            $table->string('Protéines_brutes_N_x_625_g100g');
            $table->string('Glucides_g100g');
            $table->string('Lipides_g100g');
            $table->string('Sucres_g100g');
            $table->string('Amidon_g100g');
            $table->string('Fibres_alimentaires_g100g');
            $table->string('Acides_organiques_g100g');
            $table->string('AG_saturés_g100g');
            $table->string('AG_monoinsaturés_g100g');
            $table->string('Cholestérol_mg100g');
            $table->string('Sel_chlorure_de_sodium_g100g');
            $table->string('Calcium_mg100g');
            $table->string('Chlorure_mg100g');
            $table->string('Cuivre_mg100g');
            $table->string('Fer_mg100g');
            $table->string('Iode_µg100g');
            $table->string('Magnésium_mg100g');
            $table->string('Manganèse_mg100g');
            $table->string('Phosphore_mg100g');
            $table->string('Potassium_mg100g');
            $table->string('Sélénium_µg100g');
            $table->string('Sodium_mg100g');
            $table->string('Zinc_mg100g');
            $table->string('Rétinol_µg100g');
            $table->string('BetaCarotène_µg100g');
            $table->string('Vitamine_D_µg100g');
            $table->string('Vitamine_E_mg100g');
            $table->string('Vitamine_K1_µg100g');
            $table->string('Vitamine_K2_µg100g');
            $table->string('Vitamine_C_mg100g');
            $table->string('Vitamine_B1_ou_Thiamine_mg100g');
            $table->string('Vitamine_B2_ou_Riboflavine_mg100g');
            $table->string('Vitamine_B3_ou_PP_ou_Niacine_mg100g');
            $table->string('Vitamine_B5_ou_Acide_pantothénique_mg100g');
            $table->string('Vitamine_B6_mg100g');
            $table->string('Vitamine_B9_ou_Folates_totaux_µg100g');
            $table->string('Vitamine_B12_µg100g');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}