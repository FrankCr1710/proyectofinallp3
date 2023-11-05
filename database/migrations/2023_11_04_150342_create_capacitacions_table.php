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
        Schema::create('capacitacions', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->timestamp("fecha");
            $table->string("descripcion");
            $table->string("tipo");
            $table->foreignId("responsable_id")->constrained();
            $table->foreignId("municipalidad_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacions');
    }
};
