<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PruebasDiagnosticas>
 */
class PruebasDiagnosticasFactory extends Factory
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
            'examen_tejidos_periodontales' => $faker->text(),
            'pruebas_vitalidad' => $faker->text(),
            'diagnostico_presuntivo' => $faker->text(),
            'diagnostico_definitivo' => $faker->text(),
            'morfologia_conducto' => $faker->text(),
            'tratamiento_conducto' => $faker->text(),
            'metodos_obturacion' => $faker->text(),
            'tecnica_preparacion_biomecanica' => $faker->text(),
            'preparacion_quimica' => $faker->text(),
            'numero_ultima_lima_utilizada' => $faker->text(),
            'material_obturacion' => $faker->text(),
            'medicacion' => $faker->text(),
            'justificacion_medicacion' => $faker->text(),
            'observaciones' => $faker->text(),
        ];
    }
}
