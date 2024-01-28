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
        Schema::create('modificaciones_plan_tratamientos', function (Blueprint $table) {
            $table->id();
            $table->integer('diente');
            $table->text('tratamiento_modificado');
            $table->text('firma_docente');
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modificaciones_plan_tratamientos');
    }
};
