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
            $table->text('tipo_arco')->default('');
            $table->text('forma_arco')->default('');
            $table->text('simetria_arco')->default('');
            $table->text('paladar')->default('');
            $table->text('malposiciones_dentarias')->default('');
            $table->text('dientes_ausentes')->default('');
            $table->text('facetas_desgaste')->default('');
            $table->text('diastemas')->default('');
            $table->text('anomalias_forma_tamano_numero')->default('');

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
