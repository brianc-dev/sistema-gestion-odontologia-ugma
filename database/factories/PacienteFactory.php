<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('es_VE');

        return [
            'nombre' => $faker->firstName(),
            'apellido' => $faker->lastName(),
            'edad' => $faker->numberBetween(18, 100),
            'sexo' => $faker->regexify('[MF]'),
            'lugar_nacimiento' => $faker->address(),
            'fecha_nacimiento' => $faker->date(),
            'ocupacion' => $faker->jobTitle(),
            'telefono' => $faker->phoneNumber(),
            'contacto_emergencia' => $faker->firstName . ' ' . $faker->lastName,
            'telefono_emergencia' => $faker->phoneNumber(),
            'direccion' => $faker->address(),
            'cedula' => $faker->nationalId(),
            'motivo_consulta' => $faker->text(200),
            'enfermedad_actual' => $faker->text(200)
        ];
    }
}
