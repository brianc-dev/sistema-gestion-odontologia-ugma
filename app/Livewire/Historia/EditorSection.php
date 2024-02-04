<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosFamiliaresForm;
use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use App\Livewire\Forms\ExamenRadiograficoForm;
use App\Livewire\Forms\HistoriaOdontologicaForm;
use App\Livewire\Forms\MedicamentoForm;
use App\Livewire\Forms\PacienteForm;
use App\Livewire\Forms\PeriodontodiagramaForm;
use App\Models\Historia;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Component;


class EditorSection extends Component
{
    public PacienteForm $pacienteForm;
    public AntecedentesMedicosFamiliaresForm $antecedentesMedicosFamiliaresForm;
    public AntecedentesMedicosPersonalesForm $antecedentesMedicosPersonalesForm;
    public MedicamentoForm $medicamentoForm;
    public HistoriaOdontologicaForm $historiaOdontologicaForm;
    public ExamenRadiograficoForm $examenRadiograficoForm;
    public PeriodontodiagramaForm $periodontodiagramaForm;
    private $sections = [
        'Datos personales del paciente',
        'Antecedentes Médicos Familiares',
        'Antecedentes Médicos Personales',
        'Medicamento',
        'Historia Odontologica',
        'Examen radiográfico',
        'Periodontodiagrama',
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

    #[On('section-changed')]
    public function changeSection(int $section)
    {
        $this->section = $section;
    }

    #[On('historia-create')]
    public function save()
    {
        try {
            $this->pacienteForm->validate();
            $this->antecedentesMedicosFamiliaresForm->validate();
            $this->antecedentesMedicosPersonalesForm->validate();
            $this->medicamentoForm->validate();
            $this->historiaOdontologicaForm->validate();
            $this->examenRadiograficoForm->validate();
            $this->periodontodiagramaForm->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('errors-show');
            return;
        }

        $this->authorize('create', Historia::class);
        // reformat cedula
//        $this->form->cedula = $this->form->letra_cedula.$this->form->numero_cedula;


        session()->flash('message', 'Historia creada');

        $this->redirectRoute('dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.historia.editor-section')->with([
            'sections' => $this->sections
        ]);
    }
}
