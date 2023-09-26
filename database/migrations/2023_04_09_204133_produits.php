<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('Produits',function(Blueprint $table){
            $table->id();
    $table->string("libelle");
    $table->integer("code_bare");
    $table->integer('seuil');
    $table->integer("quantite_produit")->default(0);
    $table->double("prix_achat");
    $table->double("prix_vente");
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
        //
    }
};
