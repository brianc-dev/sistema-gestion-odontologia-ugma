<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Radiografias>
 */
class RadiografiasFactory extends Factory
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
            'radiografia_inicial' => url('/storage/radiografias/radiografia.png'),
            'radiografia_penachos_1' => url('/storage/radiografias/radiografia.png'),
            'radiografia_penachos_2' => url('/storage/radiografias/radiografia.png'),
            'radiografia_final_1' => url('/storage/radiografias/radiografia.png'),
            'radiografia_final_2' => url('/storage/radiografias/radiografia.png'),
            'radiografia_final_3' => url('/storage/radiografias/radiografia.png'),
            'radiografia_final_4' => url('/storage/radiografias/radiografia.png'),
            'radiografia_conductometria' => url('/storage/radiografias/radiografia.png'),
            'radiografia_cono_patron' => url('/storage/radiografias/radiografia.png'),
        ];
    }
}
