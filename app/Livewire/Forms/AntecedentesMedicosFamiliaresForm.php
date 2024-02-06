<?php

namespace App\Livewire\Forms;

use App\Models\AntecedentesMedicosFamiliares;
use App\Models\Paciente;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AntecedentesMedicosFamiliaresForm extends Form
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
        'madre' => ['string']
    ], message: self::messages)]
    public string $madre = '';

    #[Validate([
        'padre' => ['string']
    ], message: self::messages)]
    public string $padre = '';

    #[Validate([
        'hermanos' => ['string']
    ], message: self::messages)]
    public string $hermanos = '';

    #[Validate([
        'abuelos_maternos' => ['string']
    ], message: self::messages)]
    public string $abuelos_maternos = '';

    #[Validate([
        'abuelos_paternos' => ['string']
    ], message: self::messages)]
    public string $abuelos_paternos = '';

    public function setAntecedentesMedicosFamiliares(AntecedentesMedicosFamiliares $antecedentesMedicosFamiliares)
    {
        $this->fill($antecedentesMedicosFamiliares->attributesToArray());
    }
}
