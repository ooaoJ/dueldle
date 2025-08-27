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
        Schema::create('cards', function (Blueprint $table) {
       $table->id();
            $table->char('name',255);
            $table->enum('card_type',['monster','spell','trap']);
            $table->enum('attribute',['water','fire','light','earth','darkness','wind','divine']);
            $table->integer('level');
            $table->longText('description');//descricao de monstro
            $table->longText('effect');//efeito de monstro ou magia ou de armadilha
            $table->char('image',255);
            $table->enum('tipe_efect',['Normal Spell','Quick-Play Spell','Continuous Spell','Equip Spell','Field Spell','Ritual Spell','Normal Trap','Continuous Trap','Counter Trap']);
            $table->integer('atk');
            $table->integer('def');
            $table->enum('tipe_monster',['monster','fusion','synchro','xyz','link']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
