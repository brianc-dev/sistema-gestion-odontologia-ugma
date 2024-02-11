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
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->string('numero_historia')->default('');
            $table->foreignId('historia_status')->default(0)->constrained()->cascadeOnUpdate();
            $table->integer('ano_creacion')->nullable(false);
            $table->foreignId('estudiante_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
//            $table->foreignId('historia_status_id')->default(0)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();

            $table->index('numero_historia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
