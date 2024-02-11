<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historia>
 */
class HistoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        \App\Models\User::factory()->has(\App\Models\Estudiante::factory()->has(\App\Models\Historia::factory()->hasPaciente()->hasAntecedentesMedicosPersonales()->hasAntecedentesMedicosFamiliares()->hasMedicamento()->hasHistoriaOdontologica()->hasExamenRadiografico()->hasPeriodontograma()->count(2)))->count(3)->make();
        return [
            'ano_creacion' => date('Y')
        ];
    }
}
