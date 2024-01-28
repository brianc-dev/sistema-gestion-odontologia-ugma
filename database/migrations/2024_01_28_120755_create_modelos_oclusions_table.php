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
        Schema::create('modelos_oclusions', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('linea_media');
            $table->float('sobresalte');
            $table->float('sobrepase');
            $table->text('relacion_canina');
            $table->text('relacion_molar');
            $table->text('mordida_anterior');
            $table->text('mordida_posterior');
            $table->text('curvas_compensacion');
            $table->text('plano_oclusal');

            $table->primary('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos_oclusions');
    }
};
