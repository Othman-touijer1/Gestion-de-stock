<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('lignes_facture', function (Blueprint $table) {
        $table->id();
        $table->foreignId('facture_id')->constrained('factures')->onDelete('cascade');
        $table->string('designation');
        $table->foreignId('produit_id')->constrained('produits')->onDelete('cascade'); // Use produit_id instead of produit
        $table->decimal('prix_ht', 10, 2);
        $table->integer('quantite');
        $table->decimal('tva', 5, 2);
        $table->decimal('remise', 5, 2);
        $table->decimal('total_ht', 10, 2);
        $table->decimal('total_ttc', 10, 2);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lign_factures');
    }
};
