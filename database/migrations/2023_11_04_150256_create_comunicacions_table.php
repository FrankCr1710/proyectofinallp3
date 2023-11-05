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
        Schema::create('comunicacions', function (Blueprint $table) {
            $table->id();
            $table->string("asunto");
            $table->string("mensaje");
            $table->timestamp("fecha");
            $table->foreignId("municipalidad_id")->constrained();
            $table->foreignId("responsable_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunicacions');
    }
};
