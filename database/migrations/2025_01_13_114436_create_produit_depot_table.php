<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produit_depot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('depot_id');
            $table->integer('quantite');
            $table->timestamps();

            // Modification de la référence vers la table 'depot' au singulier
            $table->foreign('produit_id')
                  ->references('id')
                  ->on('produits')
                  ->onDelete('cascade');
            
            $table->foreign('depot_id')
                  ->references('id')
                  ->on('depot')  // Changé de 'depots' à 'depot'
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produit_depot');
    }
};