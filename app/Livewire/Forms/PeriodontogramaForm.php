<?php

namespace App\Livewire\Forms;

use App\Models\Paciente;
use App\Models\Periodontograma;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PeriodontogramaForm extends Form
{
    const MESSAGES = [
        'image' => 'El archivo debe ser una imagen. Formato JPEG o PNG.',
        'max' => 'El archivo no puede pesar más de 3 MB'
    ];

    public $periodontograma_photo;

    #[Validate([
        'correcciones' => ['string', 'between:0,200']
    ], message: self::MESSAGES)]
    public string $correcciones = '';

    public function setPeriodontograma(Periodontograma $periodontograma)
    {
        $this->periodontograma_photo = $periodontograma->url;
        $this->correcciones = $periodontograma->correcciones;
    }
}
