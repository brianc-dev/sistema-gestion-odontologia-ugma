<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstudioModelos>
 */
class EstudioModelosFactory extends Factory
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
            'examenes_complementarios' => $faker->text(),
            'interconsultas' => $faker->text(),
            'diagnostico' => $faker->text(),
            'pronostico' => $faker->text(),
        ];
    }
}
