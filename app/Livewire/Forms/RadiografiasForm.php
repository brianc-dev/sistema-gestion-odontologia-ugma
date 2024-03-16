<?php

namespace App\Livewire\Forms;

use App\Models\Radiografias;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RadiografiasForm extends Form
{
    public $radiografia_inicial;
    public $radiografia_penachos_1;
    public $radiografia_penachos_2;
    public $radiografia_final_1;
    public $radiografia_final_2;
    public $radiografia_final_3;
    public $radiografia_final_4;
    public $radiografia_conductometria;
    public $radiografia_cono_patron;

    #[Validate([
        'correcciones' => ['string', 'between:0,200']
    ])]
    public string $correcciones = '';

    public function setRadiografias(Radiografias $radiografias)
    {
        $this->fill($radiografias->attributesToArray());
    }
}
