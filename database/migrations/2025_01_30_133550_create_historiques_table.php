<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('historiques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('depot_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('quantite');
            $table->enum('type', ['addition', 'soustraction']);
            $table->timestamps();

            // Foreign keys (assurer l'intégrité des données)
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('depot_id')->references('id')->on('depots')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiques');
    }
};
