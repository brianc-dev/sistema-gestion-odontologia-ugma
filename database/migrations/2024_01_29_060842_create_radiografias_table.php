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
        Schema::create('radiografias', function (Blueprint $table) {
            $table->id();
            $table->string('radiografia_inicial');
            $table->string('radiografia_penachos_1');
            $table->string('radiografia_penachos_2');
            $table->string('radiografia_final_1');
            $table->string('radiografia_final_2');
            $table->string('radiografia_final_4');
            $table->text('radiografia_conductomedria');
            $table->text('radiografia_cono_patron');

            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radiografias');
    }
};
