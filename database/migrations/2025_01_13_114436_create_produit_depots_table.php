<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produit_depots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('depot_id');
            $table->integer('quantite');
            $table->timestamps();

            $table->foreign('produit_id')
                  ->references('id')
                  ->on('produits')
                  ->onDelete('cascade');

            $table->foreign('depot_id')
                  ->references('id')
                  ->on('depots')  
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produit_depots');
    }
};