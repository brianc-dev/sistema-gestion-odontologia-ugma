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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nombre')->default('');
            $table->string('apellido')->default('');
            $table->integer('edad')->default(0);
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->string('lugar_nacimiento')->default('');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('ocupacion')->default('');
            $table->string('direccion')->default('');
            $table->string('telefono')->default('');
            $table->string('cedula')->default('');
            $table->string('contacto_emergencia')->default('');
            $table->string('telefono_emergencia')->default('');
            $table->text('motivo_consulta')->nullable();
            $table->text('enfermedad_actual')->nullable();
            $table->text('correcciones')->default('');
            $table->timestamps();

            $table->primary('historia_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
