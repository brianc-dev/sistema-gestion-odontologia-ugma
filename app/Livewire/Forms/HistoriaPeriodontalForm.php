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

    #[Validate([
        'frecuencia_cepillado' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $frecuencia_cepillado = '';

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
        'cepillado_lengua' => [ 'boolean']
    ], message: self::messages)]
    public string $cepillado_lengua = '';

    #[Validate([
        'hemorragia_gingival' => [ 'boolean']
    ], message: self::messages)]
    public string $hemorragia_gingival = '';

    #[Validate([
        'xerostomia' => [ 'boolean']
    ], message: self::messages)]
    public string $xerostomia = '';

    #[Validate([
        'sialorrea' => [ 'boolean']
    ], message: self::messages)]
    public string $sialorrea = '';

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
        'placa_bacteriana_lengua' => [ 'boolean']
    ], message: self::messages)]
    public string $placa_bacteriana_lengua = '';

    #[Validate([
        'control_halitosis' => [ 'boolean']
    ], message: self::messages)]
    public string $control_halitosis = '';

    #[Validate([
        'tratamiento' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $tratamiento = '';
}
