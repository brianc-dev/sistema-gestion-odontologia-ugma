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
        Schema::create('estudios_radiograficos', function (Blueprint $table) {
            $table->id();
            $table->string("radiografia_panoramica_url");
            $table->string("radiografia_periapical");
            $table->string("registro_tension_arterial");
            $table->text("examenes_complementarios");
            $table->text("diagnostico");
            $table->text("plan_tratamiento");
            $table->text("consentimiento");
            $table->text("secuencia_tratamiento");

            $table->foreignId('area_cirugia_bucal_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudios_radiograficos');
    }
};
