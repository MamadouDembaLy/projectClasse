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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->integer('prix');
            $table->integer('promotion')->nullable();
            $table->text('detail');
            $table->text('image');
            $table->date('date_limit');
            $table->integer('click')->default(0);
            $table->integer('validate')->default(0);
            $table->integer('deletable')->default(0);
            $table->integer('expertise_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
