<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControlHigieneBucal>
 */
class ControlHigieneBucalFactory extends Factory
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
            'tecnica_cepillado' => $faker->text(),
            'cepillo_recomendado' => $faker->text(),
            'metodos_auxiliares_requeridos' => $faker->text(),
            'placa_bacteriana_lengua' => $faker->randomElement(['Sí', 'No']),
            'control_halitosis' => $faker->randomElement(['Sí', 'No']),
            'tratamiento' => $faker->text(),
        ];
    }
}
