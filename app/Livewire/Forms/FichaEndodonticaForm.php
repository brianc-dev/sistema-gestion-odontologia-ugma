<?php

namespace App\Livewire\Forms;

use App\Models\FichaEndodontica;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FichaEndodonticaForm extends Form
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
        'ano' => ['required', 'numeric', 'integer', 'min:0', 'max:150']
    ], message: self::messages)]
    public string $ano = '';

    #[Validate([
        'diente' => ['required', 'numeric', 'integer']
    ], message: self::messages)]
    public string $diente = '';

    #[Validate([
        'sintomas' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $sintomas = '';

    #[Validate([
        'signos' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $signos = '';

    #[Validate([
        'etiologia' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $etiologia = '';

    #[Validate([
        'interpretacion_radiografica' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $interpretacion_radiografica = '';

    public function setFichaEndodontica(?FichaEndodontica $fichaEndodontica)
    {
        $this->fill($fichaEndodontica->getAttributes());
    }
}
