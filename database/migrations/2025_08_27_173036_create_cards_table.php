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
            $table->string('name',255);
            $table->enum('card_type',['Monster','Spell','Trap']);
            $table->enum('attribute',['Water','Fire','Light','Earth','Darkness','Wind','Divine'])->nullable();
            $table->integer('level')->nullable();
            $table->longText('description')->nullable();
            $table->longText('effect')->nullable();
            $table->string('image',255);
            $table->enum('tipe_efect',['Normal Spell','Quick-Play Spell','Continuous Spell','Equip Spell','Field Spell','Ritual Spell','Normal Trap','Continuous Trap','Counter Trap'])->nullable();
            $table->integer('atk')->nullable();
            $table->integer('def')->nullable();
            $table->enum('tipe_monster',['Monster','Fusion','Synchro','XYZ','Link','Ritual'])->nullable();
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

// $2y$12$q7eCkZCEIlYy1HTnI71Un.kHDhauqeWtgRde.B5HINPiJZ4gp6Jba
