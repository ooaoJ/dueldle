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
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->char('name',255);
            $table->char('gender',255);
            $table->integer('age');
            $table->char('appear',255);
            $table->string('deck_type')->nullable();
            $table->foreignId('favorite_card')->constrained('cards');//pista
            $table->char('image',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};
