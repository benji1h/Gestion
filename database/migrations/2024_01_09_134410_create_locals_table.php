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
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('lib');
            $table->string('etage');
            $table->string('nb_place');
            $table->string('etat');
            $table->timestamps();
            $table->integer('campus_id')->index()->nullable();
            $table->foreign('campus_id')->references('id')->on('campuses')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
