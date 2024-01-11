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
        Schema::create('a_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('acro');
            $table->string('lib');
            $table->string('h');
            $table->string('q');
            $table->string('ects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_a_s');
    }
};
