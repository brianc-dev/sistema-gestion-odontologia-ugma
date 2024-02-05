<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class PeriodontogramaForm extends Form
{
    const MESSAGES = [
        'image' => 'El archivo debe ser una imagen. Formato JPEG o PNG.',
        'max' => 'El archivo no puede pesar más de 3 MB'
    ];

    #[Validate('nullable|image|max:3072', message: self::MESSAGES)] // 1MB Max
    public $url;
}
