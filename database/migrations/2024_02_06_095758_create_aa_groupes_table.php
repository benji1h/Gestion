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
        Schema::create('aa_groupes', function (Blueprint $table) {
            $table->id();
            $table->integer('aa_id');
            $table->integer('groupe_id');
            $table->foreign('aa_id')->references('id')->on('a_a_s')->OnDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupes')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aa_groupes');
    }
};
