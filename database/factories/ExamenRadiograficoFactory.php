<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExamenRadiografico>
 */
class ExamenRadiograficoFactory extends Factory
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
            'zona_nasomaxilar' => $faker->text(),
            'zona_atm' => $faker->text(),
            'zona_mandibular' => $faker->text(),
            'zona_dasi' => $faker->text(),
            'estudio_periapicales' => $faker->text(),
            'estudio_coronales' => $faker->text(),
        ];
    }
}
