<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoriaPeriodontal>
 */
class HistoriaPeriodontalFactory extends Factory
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
            'control_placa_dental_url' => $faker->text(),
            'porcentaje' => $faker->randomFloat(2, 0, 100),
        ];
    }
}
