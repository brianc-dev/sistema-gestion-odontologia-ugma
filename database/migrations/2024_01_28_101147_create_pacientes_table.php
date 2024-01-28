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
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->enum('sexo', ['M', 'F']);
            $table->string('lugar_nacimiento');
            $table->date('fecha_nacimiento');
            $table->string('ocupacion');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('cedula');
            $table->string('contacto_emergencia');
            $table->string('telefono_emergencia');
            $table->text('motivo_consulta');
            $table->text('enfermedad_actual');
            $table->timestamps();
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
