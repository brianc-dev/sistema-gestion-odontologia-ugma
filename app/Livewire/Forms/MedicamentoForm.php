<?php

namespace App\Livewire\Forms;

use App\Models\Medicamento;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MedicamentoForm extends Form
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
    #[Validate([
        'medicamento_actual' => ['string']
    ], message: self::messages)]
    public string $medicamento_actual = '';

    #[Validate([
        'alergias' => ['string']
    ], message: self::messages)]
    public string $alergias = '';

    public function setMedicamento(Medicamento $medicamento)
    {
        $this->fill($medicamento->attributesToArray());
    }
}
