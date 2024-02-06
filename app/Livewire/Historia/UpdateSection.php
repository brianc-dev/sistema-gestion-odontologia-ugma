<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosFamiliaresForm;
use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use App\Livewire\Forms\ExamenRadiograficoForm;
use App\Livewire\Forms\HistoriaOdontologicaForm;
use App\Livewire\Forms\MedicamentoForm;
use App\Livewire\Forms\PacienteForm;
use App\Livewire\Forms\PeriodontogramaForm;
use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateSection extends Component
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

    public $section = 0;
    public PacienteForm $pacienteForm;
    public AntecedentesMedicosFamiliaresForm $antecedentesMedicosFamiliaresForm;
    public AntecedentesMedicosPersonalesForm $antecedentesMedicosPersonalesForm;
    public MedicamentoForm $medicamentoForm;
    public HistoriaOdontologicaForm $historiaOdontologicaForm;
    public ExamenRadiograficoForm $examenRadiograficoForm;
    public PeriodontogramaForm $periodontogramaForm;

    public function mount(Historia $historia)
    {
        $this->pacienteForm->setPaciente($historia->paciente);
    }

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
