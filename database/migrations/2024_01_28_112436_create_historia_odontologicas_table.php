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
        Schema::create('historia_odontologicas', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('antecedentes_odontologicos_personales');
            $table->enum('ortodoncia', ['Sí', 'No']);
            $table->enum('protesis', ['Sí', 'No']);
            $table->text('habitos');
            $table->text('descripcion_habitos');
            $table->text('examen_fisico');
            $table->text('examen_extrabucal');
            $table->text('examen_intrabucal');
            $table->text('correcciones')->default('');

            $table->primary('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historia_odontologicas');
    }
};
