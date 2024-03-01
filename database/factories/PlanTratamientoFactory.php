<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanTratamiento>
 */
class PlanTratamientoFactory extends Factory
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
            'tipo_cavidad' => $faker->text(),
            'tratamiento' => $faker->text(),
        ];
    }
}
