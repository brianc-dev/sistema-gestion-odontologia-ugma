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
        Schema::create('area_cirugia_bucals', function (Blueprint $table) {
            $table->id();
            $table->text('datos');
            $table->text('motivo_consulta');
            $table->text('enfermedad_actual');
            $table->text('anamnesis');
            $table->text('habitos');
            $table->text('femenino');
            $table->text('resumen_antecedentes_personales');
            $table->text('resumen_antecedentes_familiares');
            $table->text('examen_extraoral');
            $table->text('examen_intraoral');
            $table->text('observaciones');
            $table->string('periodontograma_url');

            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_cirugia_bucals');
    }
};
