<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoriaOdontologica>
 */
class HistoriaOdontologicaFactory extends Factory
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
            'antecedentes_odontologicos_personales' => $faker->text(),
            'ortodoncia' => $faker->randomElement(['Sí', 'No']),
            'protesis' => $faker->randomElement(['Sí', 'No']),
            'habitos' => $faker->text(),
            'descripcion_habitos' => $faker->text(),
            'examen_fisico' => $faker->text(),
            'examen_extrabucal' => $faker->text(),
            'examen_intrabucal' => $faker->text(),
        ];
    }
}
