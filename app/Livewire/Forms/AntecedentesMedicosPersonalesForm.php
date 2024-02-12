<?php

namespace App\Livewire\Forms;

use App\Models\AntecedentesMedicosPersonales;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AntecedentesMedicosPersonalesForm extends Form
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
        'trastorno_cardiovascular' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_cardiovascular = '';

    #[Validate([
        'trastorno_respiratorio' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_respiratorio = '';

    #[Validate([
        'trastorno_gastrointestinal' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_gastrointestinal = '';

    #[Validate([
        'trastorno_oseo' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_oseo = '';

    #[Validate([
        'trastorno_urologico' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_urologico = '';

    #[Validate([
        'trastorno_hematologico' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_hematologico = '';

    #[Validate([
        'trastorno_endocrino' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_endocrino = '';

    #[Validate([
        'trastorno_neurologico' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_neurologico = '';

    #[Validate([
        'trastorno_ginecologico' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $trastorno_ginecologico = '';

    #[Validate([
        'enfermedad_infectocontagiosa' => ['required', 'regex:/Sí|No/']
    ], message: self::messages)]
    public string $enfermedad_infectocontagiosa = '';

    #[Validate([
        'descripcion_amt' => ['string', 'between:0,300']
    ], message: self::messages, as: 'descripción')]
    public string $descripcion_amt = '';

    #[Validate([
        'correcciones' => ['string', 'between:0,200']
    ], message: self::messages)]
    public string $correcciones = '';

    public function setAntecedentesMedicosPersonales(AntecedentesMedicosPersonales $antecedentesMedicosPersonalespaciente)
    {
        $this->fill($antecedentesMedicosPersonalespaciente->attributesToArray());
    }
}
