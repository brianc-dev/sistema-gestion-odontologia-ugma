<?php

namespace App\Livewire\Forms;

use App\Models\ExamenRadiografico;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ExamenRadiograficoForm extends Form
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
        'zona_nasomaxilar' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $zona_nasomaxilar = '';

    #[Validate([
        'zona_atm' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $zona_atm = '';

    #[Validate([
        'zona_mandibular' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $zona_mandibular = '';

    #[Validate([
        'zona_dasi' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $zona_dasi = '';

    #[Validate([
        'estudio_periapicales' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $estudio_periapicales = '';

    #[Validate([
        'estudio_coronales' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $estudio_coronales = '';

    #[Validate([
        'correcciones' => ['string', 'between:0,200']
    ], message: self::messages)]
    public string $correcciones = '';

    public function setExamenRadiografico(ExamenRadiografico $examenRadiografico)
    {
        $this->fill($examenRadiografico->attributesToArray());
    }
}
