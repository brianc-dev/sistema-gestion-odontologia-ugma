<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SecuenciaTratamiento>
 */
class SecuenciaTratamientoFactory extends Factory
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
            'diente' => $faker->numberBetween(18, 38),
            'tratamiento_realizado' => $faker->text(),
            'observaciones_docente' => $faker->text(),
            'firma' => $faker->text(20),
        ];
    }
}
