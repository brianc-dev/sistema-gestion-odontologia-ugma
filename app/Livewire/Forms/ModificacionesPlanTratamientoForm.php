<?php

namespace App\Livewire\Forms;

use App\Models\ModificacionesPlanTratamiento;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ModificacionesPlanTratamientoForm extends Form
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
            'modificacionesPlanTratamiento' => ['array'],
            'modificacionesPlanTratamiento.*' => ['array:fecha,diente,tratamiento'],
            'modificacionesPlanTratamiento.*.fecha' => ['required', 'date'],
            'modificacionesPlanTratamiento.*.diente' => ['required', 'numeric', 'integer', 'between:18,48'],
            'modificacionesPlanTratamiento.*.tratamiento' => ['required'],
        ]
    )]
    public $modificacionesPlanTratamiento = [];

    public function setModificacionesPlanTratamiento(Collection $modificacionesPlanTratamiento)
    {
        $this->modificacionesPlanTratamiento = $modificacionesPlanTratamiento->map(fn($plan, $index) => [
            'fecha' => $plan->created_at,
            'diente' => $plan->diente,
            'tratamiento' => $plan->tratamiento_modificado
        ]);
    }
}
