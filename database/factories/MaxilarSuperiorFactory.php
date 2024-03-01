<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaxilarSuperior>
 */
class MaxilarSuperiorFactory extends Factory
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
            'tipo_arco' => $faker->text(),
            'forma_arco' => $faker->text(),
            'simetria_arco' => $faker->text(),
            'paladar' => $faker->text(),
            'malposiciones_dentarias' => $faker->text(),
            'dientes_ausentes' => $faker->text(),
            'facetas_desgaste' => $faker->text(),
            'diastemas' => $faker->text(),
            'anomalias_forma_tamano_numero' => $faker->text(),
        ];
    }
}
