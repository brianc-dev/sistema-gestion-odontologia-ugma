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
            'antecedentes_odontologicos_personales' => $faker->realText(200),
            'ortodoncia' => $faker->randomElement(['Sí', 'No']),
            'protesis' => $faker->randomElement(['Sí', 'No']),
            'habitos' => $faker->realText(200),
            'descripcion_habitos' => $faker->realText(200),
            'examen_fisico' => $faker->realText(200),
            'examen_extrabucal' => $faker->realText(200),
            'examen_intrabucal' => $faker->realText(200),
        ];
    }
}
