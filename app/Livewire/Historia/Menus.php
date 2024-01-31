<?php

namespace App\Livewire\Historia;

use Livewire\Component;
use function Laravel\Prompts\alert;

class Menus extends Component
{
    private $menus = [
        'Datos personales del paciente',
        'Antecedentes Médicos Personales',
        'Medicamento',
        'Antecedentes Médicos Familiares',
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

    public function changeSection($section) {
        $this->dispatch('section-changed', section: $section)->to(EditorSection::class);
    }

    public function render()
    {
        return view('livewire.historia.menus')->with([
            'menus' => $this->menus
        ]);
    }
}
