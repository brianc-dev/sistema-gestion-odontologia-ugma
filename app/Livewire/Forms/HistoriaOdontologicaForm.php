<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class HistoriaOdontologicaForm extends Form
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
        'antecedentes_odontologicos_personales' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $antecedentes_odontologicos_personales = '';

    #[Validate([
        'ortodoncia' => ['required', 'boolean']
    ], message: self::messages)]
    public string $ortodoncia = '';

    #[Validate([
        'protesis' => ['required', 'boolean']
    ], message: self::messages)]
    public string $protesis = '';

    #[Validate([
        'habitos' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $habitos = '';

    #[Validate([
        'descripcion_habitos' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $descripcion_habitos = '';

    #[Validate([
        'examen_fisico' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $examen_fisico = '';

    #[Validate([
        'examen_extrabucal' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $examen_extrabucal = '';

    #[Validate([
        'examen_intrabucal' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $examen_intrabucal = '';
}
