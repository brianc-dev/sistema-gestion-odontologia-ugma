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
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('examen_tejidos_periodontales')->default('');
            $table->text('pruebas_vitalidad')->default('');
            $table->text('diagnostico_presuntivo')->default('');
            $table->text('diagnostico_definitivo')->default('');
            $table->text('morfologia_conducto')->default('');
            $table->text('tratamiento_conducto')->default('');
            $table->text('metodos_obturacion')->default('');
            $table->text('tecnica_preparacion_biomecanica')->default('');
            $table->text('preparacion_quimica')->default('');
            $table->text('numero_ultima_lima_utilizada')->default('');
            $table->text('material_obturacion')->default('');
            $table->text('medicacion')->default('');
            $table->text('justificacion_medicacion')->default('');
            $table->text('observaciones')->default('');

            $table->primary('historia_id');
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
