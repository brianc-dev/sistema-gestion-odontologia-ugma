<?php

namespace App\Livewire\Forms;

use App\Models\PlanTratamiento;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PlanTratamientoForm extends Form
{
    const messages = [
        'required' => 'El campo :attribute es requerido.',
        'alpha' => 'El campo :attribute solo debe poseer letras.',
        'between' => 'El campo :attribute debe tener entre :min y :max caracteres.',
        'min' => 'El campo :attribute debe ser mínimo :min',
        'max' => 'El campo :attribute debe ser máximo :max',
        'regex' => 'El campo :attribute no posee el formato correcto.',
        'numeric' => 'El campo :attribute debe ser numérico.',
        'integer' => 'El campo :attribute debe ser un número entero sin decimales.',
        'boolean' => 'El campo :attribute debe ser Sí o No.'
    ];

    #[Validate(
        [
            'planTratamiento' => ['array'],
            'planTratamiento.*' => ['array:diente,cavidad,tratamiento'],
            'planTratamiento.*.diente' => ['required', 'numeric', 'integer', 'between:18,48'],
            'planTratamiento.*.cavidad' => ['required'],
            'planTratamiento.*.tratamiento' => ['required'],
        ]
    )]
    public $planTratamiento = [];

    public function setPlanTratamiento(Collection $planTratamientos)
    {
        foreach ($planTratamientos as $plan) {
            array_push($this->planTratamiento, [
                'diente' => $plan->diente,
                'cavidad' => $plan->tipo_cavidad,
                'tratamiento' => $plan->tratamiento,
            ]);
        }
    }
}
