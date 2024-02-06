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
        Schema::create('groupes_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('groupe_id');
            $table->integer('inscription_id');
            $table->foreign('groupe_id')->references('id')->on('groupes')->OnDelete('cascade');
            $table->foreign('inscription_id')->references('id')->on('inscriptions')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupes_inscriptions');
    }
};
