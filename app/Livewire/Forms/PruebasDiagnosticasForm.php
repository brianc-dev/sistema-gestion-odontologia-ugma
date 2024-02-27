<?php

namespace App\Livewire\Forms;

use App\Models\PruebasDiagnosticas;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PruebasDiagnosticasForm extends Form
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
        'examen_tejidos_periodontales' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $examen_tejidos_periodontales = '';

    #[Validate([
        'pruebas_vitalidad' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $pruebas_vitalidad = '';

    #[Validate([
        'diagnostico_presuntivo' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $diagnostico_presuntivo = '';

    #[Validate([
        'diagnostico_definitivo' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $diagnostico_definitivo = '';

    #[Validate([
        'morfologia_conducto' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $morfologia_conducto = '';

    #[Validate([
        'tratamiento_conducto' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $tratamiento_conducto = '';

    #[Validate([
        'metodos_obturacion' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $metodos_obturacion = '';

    #[Validate([
        'tecnica_preparacion_biomecanica' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $tecnica_preparacion_biomecanica = '';

    #[Validate([
        'preparacion_quimica' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $preparacion_quimica = '';

    #[Validate([
        'numero_ultima_lima_utilizada' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $numero_ultima_lima_utilizada = '';

    #[Validate([
        'material_obturacion' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $material_obturacion = '';

    #[Validate([
        'medicacion' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $medicacion = '';

    #[Validate([
        'justificacion_medicacion' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $justificacion_medicacion = '';

    #[Validate([
        'observaciones' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $observaciones = '';

    public function setPruebasDiagnosticas(PruebasDiagnosticas $pruebasDiagnosticas)
    {
        $this->fill($pruebasDiagnosticas->getAttributes());
    }
}
