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
        Schema::create('ficha_clinica_cirugia_paciente_regulars', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->integer('edad');
            $table->string('telefono');
            $table->string('ocupacion');
            $table->text('direccion');
            $table->text('nombre_bachiller');
            $table->string('cedula_bachiller');
            $table->integer('semestre');
            $table->string('telefono_bachiller');
            $table->text('motivo_consulta');
            $table->text('enfermedad_actual');
            $table->text('variacion_estado_sistemico');
            $table->text('evaluacion_radiografica_periapical');
            $table->text('observaciones_pertinentes');
            $table->text('diagnostico');
            $table->text('plan_tratamiento');
            $table->string('registro_tension_arterial_pre_quirurgica');
            $table->string('registro_tension_arterial_post_quirurgica');
            $table->text('examenes_complementarios');
            $table->text('consentimiento');
            $table->text('evolucion');

            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_clinica_cirugia_paciente_regulars');
    }
};
