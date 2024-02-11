<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AntecedentesMedicosPersonales>
 */
class AntecedentesMedicosPersonalesFactory extends Factory
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
            'trastorno_cardiovascular' => $faker->randomElement(['Sí', 'No']),
            'trastorno_respiratorio' => $faker->randomElement(['Sí', 'No']),
            'trastorno_gastrointestinal' => $faker->randomElement(['Sí', 'No']),
            'trastorno_oseo' => $faker->randomElement(['Sí', 'No']),
            'trastorno_urologico' => $faker->randomElement(['Sí', 'No']),
            'trastorno_hematologico' => $faker->randomElement(['Sí', 'No']),
            'trastorno_endocrino' => $faker->randomElement(['Sí', 'No']),
            'trastorno_neurologico' => $faker->randomElement(['Sí', 'No']),
            'trastorno_ginecologico' => $faker->randomElement(['Sí', 'No']),
            'enfermedad_infectocontagiosa' => $faker->randomElement(['Sí', 'No']),
            'descripcion_amt' => $faker->text(300),
        ];
    }
}
