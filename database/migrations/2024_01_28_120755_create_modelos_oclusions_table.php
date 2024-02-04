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
            $table->text('linea_media')->default('');
            $table->float('sobresalte')->default(0);
            $table->float('sobrepase')->default(0);
            $table->text('relacion_canina')->default('');
            $table->text('relacion_molar')->default('');
            $table->text('mordida_anterior')->default('');
            $table->text('mordida_posterior')->default('');
            $table->text('curvas_compensacion')->default('');
            $table->text('plano_oclusal')->default('');

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
