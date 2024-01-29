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
        Schema::create('historia_periodontals', function (Blueprint $table) {
            $table->id();
            $table->integer('higiene_bucal');
            $table->text('control_placa_dental_url');
            $table->decimal('porcentaje', 5, 2);
            $table->timestamps();

            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historia_periodontals');
    }
};
