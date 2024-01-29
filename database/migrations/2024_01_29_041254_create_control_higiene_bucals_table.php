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
        Schema::create('control_higiene_bucals', function (Blueprint $table) {
            $table->id();
            $table->text('tecnica_cepillado');
            $table->text('cepillo_recomendado');
            $table->text('metodos_auxiliares_requeridos');
            $table->text('placa_bacteriana_lengua');
            $table->enum('control_halitosis', ['Sí', 'No']);
            $table->text('tratamiento');

            $table->foreignId('historia_periodontals_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_higiene_bucals');
    }
};
