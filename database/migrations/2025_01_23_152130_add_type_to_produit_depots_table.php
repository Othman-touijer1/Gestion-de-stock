<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::table('produit_depots', function (Blueprint $table) {
            $table->enum('type', ['addition', 'soustraction'])->nullable(); //default
        });
    }

    public function down()
    {
        Schema::table('produits_depots', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
