<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class HistoriaPeriodontalForm extends Form
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
        'boolean' => 'El campo :attribute debe ser Sí o No.',
        'decimal' => 'La cifra debe tener de :min a :max dígitos decimales.'
    ];

    #[Validate([
        'higiene_bucal' => ['numeric', 'integer']
    ], message: self::messages)]
    public string $higiene_bucal = '';

    #[Validate([
        'control_placa_dental_url' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $control_placa_dental_url = '';

    #[Validate([
        'porcentaje' => ['numeric', 'decimal:0,2', 'min:0', 'max:100']
    ], message: self::messages)]
    public string $porcentaje = '';
}
