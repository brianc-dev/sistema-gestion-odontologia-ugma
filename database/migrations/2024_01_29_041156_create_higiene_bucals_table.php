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
        Schema::create('higiene_bucals', function (Blueprint $table) {
            $table->id();
            $table->text('tipo_cepillo');
            $table->text('metodo_cepillado');
            $table->text('metodos_auxiliares');
            $table->enum('cepillado_lengua', ['Sí', 'No']);
            $table->enum('hemorragia_gingival', ['Sí', 'No']);
            $table->enum('xerostomia', ['Sí', 'No']);
            $table->enum('sialorrea', ['Sí', 'No']);

            $table->foreignId('historia_periodontals_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('higiene_bucals');
    }
};
