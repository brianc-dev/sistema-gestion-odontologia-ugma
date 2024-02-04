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
        Schema::create('antecedentes_medicos_personales', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('trastorno_cardiovascular', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_respiratorio', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_gastrointestinal', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_oseo', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_urologico', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_hematologico', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_endocrino', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_neurologico', ['Sí', 'No'])->nullable();
            $table->enum('trastorno_ginecologico', ['Sí', 'No'])->nullable();
            $table->enum('enfermedad_infectocontagiosa', ['Sí', 'No'])->nullable();
            $table->text('descripcion_amt')->default('');

            $table->primary('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes_medicos_personales');
    }
};
