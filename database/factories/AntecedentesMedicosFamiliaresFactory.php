<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AntecedentesMedicosFamiliares>
 */
class AntecedentesMedicosFamiliaresFactory extends Factory
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
            'madre' => $faker->text('200'),
            'padre' => $faker->text('200'),
            'hermanos' => $faker->text('200'),
            'abuelos_maternos' => $faker->text('200'),
            'abuelos_paternos' => $faker->text('200'),
        ];
    }
}
