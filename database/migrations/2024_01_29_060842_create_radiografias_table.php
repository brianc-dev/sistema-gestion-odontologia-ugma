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
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('radiografia_inicial')->default('');
            $table->string('radiografia_penachos_1')->default('');
            $table->string('radiografia_penachos_2')->default('');
            $table->string('radiografia_final_1')->default('');
            $table->string('radiografia_final_2')->default('');
            $table->string('radiografia_final_3')->default('');
            $table->string('radiografia_final_4')->default('');
            $table->text('radiografia_conductometria')->default('');
            $table->text('radiografia_cono_patron')->default('');

            $table->primary('historia_id');
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
