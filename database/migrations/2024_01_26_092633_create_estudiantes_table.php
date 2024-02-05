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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique();
            $table->foreignId('user_id')->nullable(false)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('profesor_id')->nullable()->default(null)->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreignId('lapso_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
