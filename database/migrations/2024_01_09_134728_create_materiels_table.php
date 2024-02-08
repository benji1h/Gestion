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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('lib');
            $table->string('type');
            $table->string('marque');
            $table->string('prix');
            $table->string('etat');
            $table->timestamps();
            $table->integer('local_id')->index()->nullable();
            $table->foreign('local_id')->references('id')->on('locals')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
