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
        Schema::create('aa_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('aa_id');
            $table->integer('inscription_id');
            $table->foreign('aa_id')->references('id')->on('a_a_s')->OnDelete('cascade');
            $table->foreign('inscription_id')->references('id')->on('inscriptions')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aa_inscriptions');
    }
};
