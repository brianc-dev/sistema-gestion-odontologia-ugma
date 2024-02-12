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
        Schema::create('examen_radiograficos', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('zona_nasomaxilar')->default('');
            $table->text('zona_atm')->default('');
            $table->text('zona_mandibular')->default('');
            $table->text('zona_dasi')->default('');
            $table->text('estudio_periapicales')->default('');
            $table->text('estudio_coronales')->default('');
            $table->text('correcciones')->default('');

            $table->primary('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_radiograficos');
    }
};
