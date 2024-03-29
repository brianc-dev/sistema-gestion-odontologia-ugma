<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cedula' => fake('es_VE')->nationalId(), //->regexify('[VE][0-9]{7,8}'),
            'nombre' => fake('es_VE')->firstName(),
            'apellido' => fake('es_VE')->lastName(),
            'profesor_id' => null,
            'lapso_id' => 1
        ];
    }
}
