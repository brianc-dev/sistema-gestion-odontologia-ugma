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
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('tipo_cepillo')->default('');
            $table->text('metodo_cepillado')->default('');
            $table->text('metodos_auxiliares')->default('');
            $table->enum('cepillado_lengua', ['Sí', 'No'])->default(null);
            $table->enum('hemorragia_gingival', ['Sí', 'No'])->default(null);
            $table->enum('xerostomia', ['Sí', 'No'])->default(null);
            $table->enum('sialorrea', ['Sí', 'No'])->default(null);

            $table->primary('historia_id');
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
