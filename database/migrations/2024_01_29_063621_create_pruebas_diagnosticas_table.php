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
        Schema::create('pruebas_diagnosticas', function (Blueprint $table) {
            $table->id();
            $table->text('examen_tejidos_periodontales');
            $table->text('pruebas_vitalidad');
            $table->text('diagnostico_presuntivo');
            $table->text('diagnostico_definitivo');
            $table->text('morfologia_conducto');
            $table->text('tratamiento_conducto');
            $table->text('metodos_obturacion');
            $table->text('tecnica_preparacion_biomecanica');
            $table->text('preparacion_quimica');
            $table->text('numero_ultima_lima_utilizada');
            $table->text('material_obturacion');
            $table->text('medicacion');
            $table->text('justificacion_medicacion');
            $table->text('observaciones');

            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas_diagnosticas');
    }
};
