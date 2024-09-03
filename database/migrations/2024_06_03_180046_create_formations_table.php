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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('prix')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('detail');
            $table->text('image')->nullable();
            $table->integer('click')->default(0);
            $table->integer('validate')->default(0);
            $table->integer('deletable')->default(0);
            $table->integer('etat')->default(0);
            $table->foreignId('expertise_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
