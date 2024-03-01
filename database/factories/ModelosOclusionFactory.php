<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelosOclusion>
 */
class ModelosOclusionFactory extends Factory
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
            'linea_media' => $faker->text(),
            'sobresalte' => $faker->text(),
            'sobrepase' => $faker->text(),
            'relacion_canina' => $faker->text(),
            'relacion_molar' => $faker->text(),
            'mordida_anterior' => $faker->text(),
            'mordida_posterior' => $faker->text(),
            'curvas_compensacion' => $faker->text(),
            'plano_oclusal' => $faker->text(),
        ];
    }
}
