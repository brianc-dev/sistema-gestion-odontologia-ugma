<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HigieneBucal>
 */
class HigieneBucalFactory extends Factory
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
            'frecuencia_cepillado' => $faker->text(),
            'tipo_cepillo' => $faker->text(),
            'metodo_cepillado' => $faker->text(),
            'metodos_auxiliares' => $faker->text(),
            'cepillado_lengua' => $faker->randomElement(['Sí', 'No']),
            'hemorragia_gingival' => $faker->randomElement(['Sí', 'No']),
            'xerostomia' => $faker->randomElement(['Sí', 'No']),
            'sialorrea' => $faker->randomElement(['Sí', 'No']),
        ];
    }
}
