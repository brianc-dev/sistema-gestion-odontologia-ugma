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
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('tecnica_cepillado')->default('');
            $table->text('cepillo_recomendado')->default('');
            $table->text('metodos_auxiliares_requeridos')->default('');
            $table->enum('placa_bacteriana_lengua', ['Sí', 'No'])->default(null);
            $table->enum('control_halitosis', ['Sí', 'No'])->default(null);
            $table->text('tratamiento')->default('');

            $table->primary('historia_id');
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
