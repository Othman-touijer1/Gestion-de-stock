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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numero_facture');
            $table->date('date_facture');
            $table->string('societe');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('adresse_client');
            $table->string('client');
            $table->decimal('total_ht', 10, 2);
            $table->decimal('total_tva', 10, 2);
            $table->decimal('total_ttc', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
