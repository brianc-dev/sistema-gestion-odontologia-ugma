<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosFamiliaresForm;
use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use App\Livewire\Forms\EstudioModelosForm;
use App\Livewire\Forms\ExamenRadiograficoForm;
use App\Livewire\Forms\FichaEndodonticaForm;
use App\Livewire\Forms\HistoriaOdontologicaForm;
use App\Livewire\Forms\HistoriaPeriodontalForm;
use App\Livewire\Forms\MedicamentoForm;
use App\Livewire\Forms\ModificacionesPlanTratamientoForm;
use App\Livewire\Forms\PacienteForm;
use App\Livewire\Forms\PeriodontogramaForm;
use App\Livewire\Forms\PlanTratamientoForm;
use App\Livewire\Forms\PresupuestoForm;
use App\Livewire\Forms\PruebasDiagnosticasForm;
use App\Livewire\Forms\SecuenciaTratamientoForm;
use App\Models\ControlHigieneBucal;
use App\Models\HigieneBucal;
use App\Models\Historia;
use App\Models\MaxilarInferior;
use App\Models\MaxilarSuperior;
use App\Models\ModelosOclusion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithFileUploads;


class EditorSection extends Component
{
//    use WithFileUploads;

    public Historia $historia;
    public PacienteForm $pacienteForm;
    public AntecedentesMedicosFamiliaresForm $antecedentesMedicosFamiliaresForm;
    public AntecedentesMedicosPersonalesForm $antecedentesMedicosPersonalesForm;
    public MedicamentoForm $medicamentoForm;
    public HistoriaOdontologicaForm $historiaOdontologicaForm;
    public ExamenRadiograficoForm $examenRadiograficoForm;
    public PeriodontogramaForm $periodontogramaForm;
    public PlanTratamientoForm $planTratamientoForm;
    public ModificacionesPlanTratamientoForm $modificacionesPlanTratamientoForm;
    public PresupuestoForm $presupuestoForm;
    public SecuenciaTratamientoForm $secuenciaTratatamientoForm;
    public HistoriaPeriodontalForm $historiaPeriodontalForm;
    public FichaEndodonticaForm $fichaEndodonticaForm;
    public PruebasDiagnosticasForm $pruebasDiagnosticasForm;

    public EstudioModelosForm $estudioModelosForm;
    private $sections = [
        'Datos personales del paciente',
        'Antecedentes Médicos Personales',
        'Antecedentes Médicos Familiares',
        'Medicamento',
        'Historia Odontológica',
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
        'Radiografias'
    ];

    public $section = 0;

    public $enabled = false;

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
    public function updateHistoria()
    {
        $this->pacienteForm->cedula = $this->pacienteForm->letra_cedula . $this->pacienteForm->numero_cedula;

        try {
            $this->pacienteForm->validate();
            $this->antecedentesMedicosFamiliaresForm->validate();
            $this->antecedentesMedicosPersonalesForm->validate();
            $this->medicamentoForm->validate();
            $this->historiaOdontologicaForm->validate();
            $this->examenRadiograficoForm->validate();
//            $this->periodontogramaForm->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('errors-show');
            return;
        }

        $this->authorize('update', $this->historia);

        $paciente = $this->historia->paciente;
        $paciente->update($this->pacienteForm->except(['letra_cedula', 'numero_cedula']));

        $antecedentesFamiliares = $this->historia->antecedentesMedicosFamiliares;
        $antecedentesFamiliares->update($this->antecedentesMedicosFamiliaresForm->all());

        $antecedentesPersonales = $this->historia->antecedentesMedicosPersonales;
        $antecedentesPersonales->update($this->antecedentesMedicosPersonalesForm->all());

        $this->historia->medicamento->update($this->medicamentoForm->all());
        $this->historia->historiaOdontologica->update($this->historiaOdontologicaForm->all());
        $this->historia->examenRadiografico->update($this->examenRadiograficoForm->all());


        session()->put('message', 'Historia actualizada');

        $this->redirectRoute('dashboard');
    }

    #[On('historia-create')]
    public function saveHistoria()
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
            $this->estudioModelosForm->validate();
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

        $periodontograma = new \App\Models\Periodontograma();
        $periodontograma->historia_id = $historia->id;

        if ($this->periodontogramaForm->periodontograma_photo) {
            $file = Str::remove('livewire-file:', $this->periodontogramaForm->periodontograma_photo);
            $this->periodontogramaForm->periodontograma_photo = Str::replace('livewire-file:', 'livewire-tmp/', $this->periodontogramaForm->periodontograma_photo);

            Storage::move($this->periodontogramaForm->periodontograma_photo, 'public/periodontogramas/' . $file);

            $periodontograma->url = Storage::url('public/periodontogramas/' . $file);
        }
        $periodontograma->save();

        foreach ($this->planTratamientoForm->planTratamiento as $plan) {
            $planTratamiento = new \App\Models\PlanTratamiento();
            $planTratamiento->historia_id = $historia->id;
            $planTratamiento->diente = $plan['diente'];
            $planTratamiento->tipo_cavidad = $plan['cavidad'];
            $planTratamiento->tratamiento = $plan['tratamiento'];
            $planTratamiento->save();
        }

        foreach ($this->modificacionesPlanTratamientoForm->modificacionesPlanTratamiento as $plan) {
            $modificacionesPlanTratamiento = new \App\Models\ModificacionesPlanTratamiento();
            $modificacionesPlanTratamiento->historia_id = $historia->id;
            $modificacionesPlanTratamiento->diente = $plan['diente'];
            $modificacionesPlanTratamiento->tratamiento_modificado = $plan['tratamiento'];
            $modificacionesPlanTratamiento->firma_docente = 'En espera';
            $modificacionesPlanTratamiento->save();
        }

        foreach ($this->presupuestoForm->presupuestos as $presu) {
            $presupuesto = new \App\Models\Presupuesto();
            $presupuesto->historia_id = $historia->id;
            $presupuesto->tratamiento = $presu['tratamiento'];
            $presupuesto->costo_unitario = $presu['costo'];
            $presupuesto->save();
        }

        foreach ($this->secuenciaTratatamientoForm->secuenciaTratamientos as $secuencia) {
            $secuenciaTratamiento = new \App\Models\SecuenciaTratamiento();
            $secuenciaTratamiento->historia_id = $historia->id;
            $secuenciaTratamiento->diente = $secuencia['diente'];
            $secuenciaTratamiento->tratamiento_realizado = $secuencia['tratamiento_realizado'];
            $secuenciaTratamiento->observaciones_docente = $secuencia['observaciones_docente'];
            $secuenciaTratamiento->firma = 'En espera';
            $secuenciaTratamiento->save();
        }

        $estudioModelos = new \App\Models\EstudioModelos();
        $estudioModelos->historia_id = $historia->id;
        $estudioModelos->fill($this->estudioModelosForm->only([
            'examenes_complementarios', 'interconsultas', 'diagnostico', 'pronostico',
        ]));
        $estudioModelos->save();

        $maxsupAttributes = collect($this->estudioModelosForm->only([
            'maxsup_tipo_arco', 'maxsup_forma_arco', 'maxsup_simetria_arco', 'maxsup_paladar', 'maxsup_malposiciones_dentarias', 'maxsup_dientes_ausentes', 'maxsup_facetas_desgaste', 'maxsup_diastemas', 'maxsup_anomalias_forma_tamano_numero',
        ]));
        $newMaxsupAttributes = [];

        $maxsupAttributes->each(function ($item, $key) use (&$newMaxsupAttributes) {
            $newKey = Str::remove('maxsup_', $key);
            $newMaxsupAttributes[$newKey] = $item;
        });

        $maxinfAttributes = collect($this->estudioModelosForm->only([
            'maxinf_tipo_arco', 'maxinf_forma_arco', 'maxinf_simetria_arco', 'maxinf_piso_boca', 'maxinf_malposiciones_dentarias', 'maxinf_dientes_ausentes', 'maxinf_facetas_desgaste', 'maxinf_diastemas', 'maxinf_anomalias_forma_tamano_numero',
        ]));
        $newMaxinfAttributes = [];

        $maxinfAttributes->each(function ($item, $key) use (&$newMaxinfAttributes) {
            $newKey = Str::remove('maxinf_', $key);
            $newMaxinfAttributes[$newKey] = $item;
        });

        $oclusionAttributes = collect($this->estudioModelosForm->only([
            'oclusion_linea_media', 'oclusion_sobresalte', 'oclusion_sobrepase', 'oclusion_relacion_canina', 'oclusion_relacion_molar', 'oclusion_mordida_anterior', 'oclusion_mordida_posterior', 'oclusion_curvas_compensacion', 'oclusion_plano_oclusal',
        ]));
        $newOclusionAttributes = [];

        $oclusionAttributes->each(function ($item, $key) use (&$newOclusionAttributes) {
            $newKey = Str::remove('oclusion_', $key);
            $newOclusionAttributes[$newKey] = $item;
        });

        $maxsup = new MaxilarSuperior();
        $maxsup->historia_id = $historia->id;
        $maxsup->fill($newMaxsupAttributes);
        $maxsup->save();

        $maxinf = new MaxilarInferior();
        $maxinf->historia_id = $historia->id;
        $maxinf->fill($newMaxinfAttributes);
        $maxinf->save();

        $oclusion = new ModelosOclusion();
        $oclusion->historia_id = $historia->id;
        $oclusion->fill($newOclusionAttributes);
        $oclusion->save();

        $historiaPeriodontal = \App\Models\HistoriaPeriodontal::create(
            ['historia_id' => $historia->id]
        );

        $higiene = new \App\Models\HigieneBucal($this->historiaPeriodontalForm->only([
            'frecuencia_cepillado', 'tipo_cepillo', 'metodo_cepillado', 'metodos_auxiliares', 'cepillado_lengua', 'hemorragia_gingival', 'xerostomia', 'sialorrea']));
        $higiene->historia_id = $historia->id;
        $higiene->save();

        $control = new \App\Models\ControlHigieneBucal($this->historiaPeriodontalForm->only([
            'tecnica_cepillado', 'cepillo_recomendado', 'metodos_auxiliares_requeridos', 'placa_bacteriana_lengua', 'control_halitosis', 'tratamiento'
        ]));
        $control->historia_id = $historia->id;
        $control->save();

        $fichaEndodontica = new \App\Models\FichaEndodontica($this->fichaEndodonticaForm->all());
        $fichaEndodontica->historia_id = $historia->id;
        $fichaEndodontica->save();

        $pruebasDiagnosticas = new \App\Models\PruebasDiagnosticas($this->pruebasDiagnosticasForm->all());
        $pruebasDiagnosticas->historia_id = $historia->id;
        $pruebasDiagnosticas->save();

        session()->put('message', 'Historia creada');

        $this->redirectRoute('dashboard');
    }

    #[On('historia-update-correcciones')]
    public function saveCorreccion()
    {
        if (!Auth::user()->isProfesor()) {
            return;
        }

        $this->pacienteForm->validateOnly('correcciones');
        $this->antecedentesMedicosFamiliaresForm->validateOnly('correcciones');
        $this->antecedentesMedicosPersonalesForm->validateOnly('correcciones');
        $this->medicamentoForm->validateOnly('correcciones');
        $this->historiaOdontologicaForm->validateOnly('correcciones');
        $this->examenRadiograficoForm->validateOnly('correcciones');
        $this->periodontogramaForm->validateOnly('correcciones');

        $this->authorize('update', $this->historia);

        $this->historia->paciente->update([
            'correcciones' => $this->pacienteForm->correcciones
        ]);

        $this->historia->antecedentesMedicosFamiliares->update([
            'correcciones' => $this->antecedentesMedicosFamiliaresForm->correcciones
        ]);

        $this->historia->antecedentesMedicosPersonales->update([
            'correcciones' => $this->antecedentesMedicosPersonalesForm->correcciones
        ]);

        $this->historia->medicamento->update([
            'correcciones' => $this->medicamentoForm->correcciones
        ]);

        $this->historia->historiaOdontologica->update([
            'correcciones' => $this->historiaOdontologicaForm->correcciones
        ]);

        $this->historia->examenRadiografico->update([
            'correcciones' => $this->examenRadiograficoForm->correcciones
        ]);

        $this->historia->periodontograma->update([
            'correcciones' => $this->periodontogramaForm->correcciones
        ]);

        session()->put('message', 'Correcciones agregadas exitosamente');

        $this->redirectRoute('dashboard');
    }

    public function mount($historia = null)
    {
        if (isset($historia)) {
            $this->historia = $historia;
            $this->enabled = false;
            $this->pacienteForm->setPaciente($historia->paciente);
            $this->antecedentesMedicosFamiliaresForm->setAntecedentesMedicosFamiliares($historia->antecedentesMedicosFamiliares);
            $this->antecedentesMedicosPersonalesForm->setAntecedentesMedicosPersonales($historia->antecedentesMedicosPersonales);
            $this->medicamentoForm->setMedicamento($historia->medicamento);
            $this->historiaOdontologicaForm->setHistoriaOdontologica($historia->historiaOdontologica);
            $this->examenRadiograficoForm->setExamenRadiografico($historia->examenRadiografico);
            $this->periodontogramaForm->setPeriodontograma($historia->periodontograma);
            $this->planTratamientoForm->setPlanTratamiento($historia->planTratamiento);
            $this->modificacionesPlanTratamientoForm->setModificacionesPlanTratamiento($historia->modificacionesPlanTratamiento);
            $this->presupuestoForm->setPresupuesto($historia->presupuesto);
            $this->secuenciaTratatamientoForm->setSecuenciaTratamiento($historia->secuenciaTratamiento);
            $this->historiaPeriodontalForm->setHistoriaPeriodontal($historia);
            $this->fichaEndodonticaForm->setFichaEndodontica($historia->fichaEndodontica);
            $this->pruebasDiagnosticasForm->setPruebasDiagnosticas($historia->pruebasDiagnosticas);
            $this->estudioModelosForm->setEstudioModelo($historia);
        } else {
            $this->enabled = true;
        }
    }

    public function render()
    {
        return view('livewire.historia.editor-section')->with([
            'sections' => $this->sections
        ]);
    }
}
