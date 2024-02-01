<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class HigieneBucalForm extends Form
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
        'tipo_cepillo' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $tipo_cepillo = '';

    #[Validate([
        'metodo_cepillado' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $metodo_cepillado = '';

    #[Validate([
        'metodos_auxiliares' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $metodos_auxiliares = '';

    #[Validate([
        'cepillado_lengua' => ['required', 'boolean']
    ], message: self::messages)]
    public string $cepillado_lengua = '';

    #[Validate([
        'hemorragia_gingival' => ['required', 'boolean']
    ], message: self::messages)]
    public string $hemorragia_gingival = '';

    #[Validate([
        'xerostomia' => ['required', 'boolean']
    ], message: self::messages)]
    public string $xerostomia = '';

    #[Validate([
        'sialorrea' => ['required', 'boolean']
    ], message: self::messages)]
    public string $sialorrea = '';
}
