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
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Component;


class EditorSection extends Component
{
    public Historia $historia;
    public PacienteForm $pacienteForm;
    public AntecedentesMedicosFamiliaresForm $antecedentesMedicosFamiliaresForm;
    public AntecedentesMedicosPersonalesForm $antecedentesMedicosPersonalesForm;
    public MedicamentoForm $medicamentoForm;
    public HistoriaOdontologicaForm $historiaOdontologicaForm;
    public ExamenRadiograficoForm $examenRadiograficoForm;
    public PeriodontogramaForm $periodontogramaForm;
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

    public $enabled = true;

    #[On('section-changed')]
    public function changeSection(int $section)
    {
        $this->section = $section;
    }

    #[On('historia-edit')]
    public function edit()
    {
        $this->enabled = !$this->enabled;
        $this->dispatch('historia-editing', $this->enabled);
    }

    #[On('historia-update')]
    public function update()
    {


        $this->pacienteForm->cedula = $this->pacienteForm->letra_cedula . $this->pacienteForm->numero_cedula;

        try {
            $this->pacienteForm->validate();
            $this->antecedentesMedicosFamiliaresForm->validate();
            $this->antecedentesMedicosPersonalesForm->validate();
            $this->medicamentoForm->validate();
            $this->historiaOdontologicaForm->validate();
            $this->examenRadiograficoForm->validate();
            $this->periodontogramaForm->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('errors-show');
            return;
        }

        $this->authorize('update', $this->historia);


    }

    #[On('historia-create')]
    public function save()
    {
        $this->pacienteForm->cedula = $this->pacienteForm->letra_cedula . $this->pacienteForm->numero_cedula;

        try {
            $this->pacienteForm->validate();
            $this->antecedentesMedicosFamiliaresForm->validate();
            $this->antecedentesMedicosPersonalesForm->validate();
            $this->medicamentoForm->validate();
            $this->historiaOdontologicaForm->validate();
            $this->examenRadiograficoForm->validate();
            $this->periodontogramaForm->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('errors-show');
            return;
        }

        $this->authorize('create', Historia::class);

        // Creamos historia con los datos validados
        $estudiante_id = Auth::user()->estudiante->id;

        $historia = Historia::create([
            'ano_creacion' => date('Y'),
            'estudiante_id' => $estudiante_id
        ]);

        $paciente = new \App\Models\Paciente();
        $paciente->historia_id = $historia->id;
        $paciente->fill($this->pacienteForm->except(['letra_cedula', 'numero_cedula']));
        $paciente->save();

        $antecedentesFamiliares = new \App\Models\AntecedentesMedicosFamiliares($this->antecedentesMedicosFamiliaresForm->all());
        $antecedentesFamiliares->historia_id = $historia->id;
        $antecedentesFamiliares->save();

        $antecedentesPersonales = new \App\Models\AntecedentesMedicosPersonales($this->antecedentesMedicosPersonalesForm->all());
        $antecedentesPersonales->historia_id = $historia->id;
        $antecedentesPersonales->save();

        $medicamentos = new \App\Models\Medicamento($this->medicamentoForm->all());
        $medicamentos->historia_id = $historia->id;
        $medicamentos->save();

        $historiaOdontologica = new \App\Models\HistoriaOdontologica($this->historiaOdontologicaForm->all());
        $historiaOdontologica->historia_id = $historia->id;
        $historiaOdontologica->save();

        $examenRadiografico = new \App\Models\ExamenRadiografico($this->examenRadiograficoForm->all());
        $examenRadiografico->historia_id = $historia->id;
        $examenRadiografico->save();

        if ($this->periodontogramaForm->url) {
            $path = $this->periodontogramaForm->url->store(path: 'periodontogramas');
            $periodontograma = new \App\Models\Periodontograma();
            $periodontograma->historia_id = $historia->id;
            $periodontograma->url = $path;
            $periodontograma->save();
        }

        session()->put('message', 'Historia creada');

        $this->redirectRoute('dashboard');
    }

    public function mount($historia = null)
    {
        if (isset($historia)) {
            $this->historia = $historia;
            $this->enabled= false;
            $this->pacienteForm->setPaciente($historia->paciente);
            $this->antecedentesMedicosFamiliaresForm->setAntecedentesMedicosFamiliares($historia->antecedentesMedicosFamiliares);
            $this->antecedentesMedicosPersonalesForm->setAntecedentesMedicosPersonales($historia->antecedentesMedicosPersonales);
            $this->medicamentoForm->setMedicamento($historia->medicamento);
            $this->historiaOdontologicaForm->setHistoriaOdontologica($historia->historiaOdontologica);
            $this->examenRadiograficoForm->setExamenRadiografico($historia->examenRadiografico);
        }
    }

    public function render()
    {
        return view('livewire.historia.editor-section')->with([
            'sections' => $this->sections
        ]);
    }
}
