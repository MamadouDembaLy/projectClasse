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
        Schema::create('coordonnes', function (Blueprint $table) {
            $table->id();
            $table->string('tel')->nullable();
            $table->string('email');
            $table->string('adresse');
            $table->text('localisation')->nullable();
            $table->integer('deletable')->default(0);
            $table->integer('etat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordonnes');
    }
};
