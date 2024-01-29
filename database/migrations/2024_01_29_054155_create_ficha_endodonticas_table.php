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
        Schema::create('ficha_endodonticas', function (Blueprint $table) {
            $table->id();
            $table->text('nombre_paciente');
            $table->text('numero_historia');
            $table->text('nombre_bachiller');
            $table->integer('anos');
            $table->integer('cliente');
            $table->text('sintomas');
            $table->text('signos');
            $table->text('etiologia');
            $table->text('interpretacion_radiografica');

            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_endodonticas');
    }
};
