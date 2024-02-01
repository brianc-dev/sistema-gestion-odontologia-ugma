<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ControlHigieneBucalForm extends Form
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
        'tecnica_cepillado' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $tecnica_cepillado = '';

    #[Validate([
        'cepillo_recomendado' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $cepillo_recomendado = '';

    #[Validate([
        'metodos_auxiliares_requeridos' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $metodos_auxiliares_requeridos = '';

    #[Validate([
        'placa_bacteriana_lengua' => ['required', 'boolean']
    ], message: self::messages)]
    public string $placa_bacteriana_lengua = '';

    #[Validate([
        'control_halitosis' => ['required', 'boolean']
    ], message: self::messages)]
    public string $control_halitosis = '';

    #[Validate([
        'tratamiento' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $tratamiento = '';
}
