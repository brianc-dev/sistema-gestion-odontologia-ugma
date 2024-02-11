<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicamento>
 */
class MedicamentoFactory extends Factory
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
            'medicamento_actual' => $faker->text(200),
            'alergias' => $faker->text(200),
        ];
    }
}
