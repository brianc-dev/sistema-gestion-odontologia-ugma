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
        Schema::create('secuencia_tratamientos', function (Blueprint $table) {
            $table->id();
            $table->integer('diente');
            $table->text('tratamiento_realizado');
            $table->text('observaciones_docente');
            $table->foreignId('firma_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('historia_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secuencia_tratamientos');
    }
};
