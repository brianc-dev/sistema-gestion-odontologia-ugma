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
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('ano')->default(null);
            $table->integer('diente')->default(null);
            $table->text('sintomas')->default('');
            $table->text('signos')->default('');
            $table->text('etiologia')->default('');
            $table->text('interpretacion_radiografica')->default('');

            $table->primary('historia_id');
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
