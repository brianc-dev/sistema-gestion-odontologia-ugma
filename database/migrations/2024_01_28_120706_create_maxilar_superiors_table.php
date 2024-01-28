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
        Schema::create('maxilar_superiors', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('tipo_arco');
            $table->text('forma_arco');
            $table->text('simetria_arco');
            $table->text('paladar');
            $table->text('malposiciones_dentarias');
            $table->text('dientes_ausentes');
            $table->text('facetas_desgaste');
            $table->text('diastemas');
            $table->text('anomalias_forma_tamano_numero');

            $table->primary('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maxilar_superiors');
    }
};
