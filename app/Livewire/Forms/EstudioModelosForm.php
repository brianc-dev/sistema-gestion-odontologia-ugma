<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EstudioModelosForm extends Form
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
        'examenes_complementarios' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $examenes_complementarios = '';

    #[Validate([
        'interconsultas' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $interconsultas = '';

    #[Validate([
        'diagnostico' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $diagnostico = '';

    #[Validate([
        'pronostico' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $pronostico = '';
}
