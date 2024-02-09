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
        Schema::create('campus_engagements', function (Blueprint $table) {
            $table->id();
            $table->integer('campus_id');
            $table->integer('engagement_id');
            $table->foreign('campus_id')->references('id')->on('campuses')->OnDelete('cascade');
            $table->foreign('engagement_id')->references('id')->on('engagements')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campus_engagements');
    }
};
