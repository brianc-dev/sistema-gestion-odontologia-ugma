<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FichaEndodontica>
 */
class FichaEndodonticaFactory extends Factory
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
            'ano' => $faker->year(),
            'diente' => $faker->numberBetween(18, 38),
            'sintomas' => $faker->text(),
            'signos' => $faker->text(),
            'etiologia' => $faker->text(),
            'interpretacion_radiografica' => $faker->text(),
        ];
    }
}
