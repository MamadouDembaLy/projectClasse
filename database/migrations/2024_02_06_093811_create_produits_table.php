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
        Schema::create('produits', function (Blueprint $table) {
            
            $table->id();

            $table->string('nomProduit');

            $table->string('reference');

            $table->foreignId('categorie_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();

            $table->integer('qte')->default(0);

            $table->integer('pu')->default(0);

            $table->string('Description');

            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();

            $table->text('image')->nullable();

            $table->integer('deletable')->default(0);

            $table->integer('etat')->default(0);

            $table->integer('seuil');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
