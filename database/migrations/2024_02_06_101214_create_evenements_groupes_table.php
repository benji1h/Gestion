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
        Schema::create('evenements_groupes', function (Blueprint $table) {
            $table->id();
            $table->integer('evenement_id');
            $table->integer('groupe_id');
            $table->foreign('evenement_id')->references('id')->on('evenements')->OnDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupes')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements_groupes');
    }
};
