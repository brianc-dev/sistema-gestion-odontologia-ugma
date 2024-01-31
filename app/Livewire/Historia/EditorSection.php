<?php

namespace App\Livewire\Historia;

use Livewire\Attributes\On;
use Livewire\Component;


class EditorSection extends Component
{
    private $sections = [
        'Datos personales del paciente',
        'Antecedentes Médicos Familiares',
        'Antecedentes Médicos Personales',
        'Medicamento',
        'Historia Odontologica',
        'Examen radiográfico',
        'Periodontograma',
        'Estudio de modelos',
        'Plan de tratamiento',
        'Modificaciones del plan de tratamiento',
        'Presupuesto',
        'Secuencia de tratamiento',
        'Historia periodontal',
        'Ficha endodontica',
        'Pruebas diagnosticas',
        'Ficha endodontica'
    ];

    public $section = 4;
    #[On('section-changed')]
    public function changeSection(int $section)
    {
        $this->section = $section;
    }

    public function render()
    {
        return view('livewire.historia.editor-section')->with([
            'sections' => $this->sections
        ]);
    }
}
