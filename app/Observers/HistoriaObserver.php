<?php

namespace App\Observers;

use App\Models\AntecedentesMedicosFamiliares;
use App\Models\AntecedentesMedicosPersonales;
use App\Models\ControlHigieneBucal;
use App\Models\EstudioModelos;
use App\Models\ExamenRadiografico;
use App\Models\FichaEndodontica;
use App\Models\HigieneBucal;
use App\Models\Historia;
use App\Models\HistoriaOdontologica;
use App\Models\HistoriaPeriodontal;
use App\Models\MaxilarInferior;
use App\Models\MaxilarSuperior;
use App\Models\Medicamento;
use App\Models\ModelosOclusion;
use App\Models\Paciente;
use App\Models\Periodontograma;
use App\Models\PruebasDiagnosticas;
use App\Models\Radiografias;

class HistoriaObserver
{
    /**
     * Handle the Historia "created" event.
     */
    public function created(Historia $historia): void
    {
        $paciente = new Paciente();
        $paciente->historia_id = $historia->id;
        $paciente->save();

        $antecedentes_personales = new AntecedentesMedicosPersonales();
        $antecedentes_personales->historia_id = $historia->id;
        $antecedentes_personales->save();

        $antecedentes_familiares = new AntecedentesMedicosFamiliares();
        $antecedentes_familiares->historia_id = $historia->id;
        $antecedentes_familiares->save();

        $medicamento = new Medicamento();
        $medicamento->historia_id = $historia->id;
        $medicamento->save();

        $historia_odontologica = new HistoriaOdontologica();
        $historia_odontologica->historia_id = $historia->id;
        $historia_odontologica->save();

        $examen_radiografico = new ExamenRadiografico();
        $examen_radiografico->historia_id = $historia->id;
        $examen_radiografico->save();

        $periodontograma = new Periodontograma();
        $periodontograma->historia_id = $historia->id;
        $periodontograma->save();

        $estudio_modelos = new EstudioModelos();
        $estudio_modelos->historia_id = $historia->id;
        $estudio_modelos->save();

        $maxilar_superior = new MaxilarSuperior();
        $maxilar_superior->historia_id = $historia->id;;
        $maxilar_superior->save();

        $maxilar_inferior = new MaxilarInferior();
        $maxilar_inferior->historia_id = $historia->id;
        $maxilar_inferior->save();

        $modelos_inclusion = new ModelosOclusion();
        $modelos_inclusion->historia_id = $historia->id;
        $modelos_inclusion->save();

        $historia_periodontal = new HistoriaPeriodontal();
        $historia_periodontal->historia_id = $historia->id;
        $historia_periodontal->save();

        $higiene_bucal = new HigieneBucal();
        $higiene_bucal->historia_id = $historia->id;
        $higiene_bucal->save();

        $control_higiene_bucal = new ControlHigieneBucal();
        $control_higiene_bucal->historia_id = $historia->id;
        $control_higiene_bucal->save();

        $ficha_endodontica = new FichaEndodontica();
        $ficha_endodontica->historia_id = $historia->id;
        $ficha_endodontica->save();

        $pruebas_diagnosticas = new PruebasDiagnosticas();
        $pruebas_diagnosticas->historia_id = $historia->id;
        $pruebas_diagnosticas->save();

        $radiografias = new Radiografias();
        $radiografias->historia_id = $historia->id;
        $radiografias->save();
    }

    /**
     * Handle the Historia "updated" event.
     */
    public function updated(Historia $historia): void
    {
        //
    }

    /**
     * Handle the Historia "deleted" event.
     */
    public function deleted(Historia $historia): void
    {
        //
    }

    /**
     * Handle the Historia "restored" event.
     */
    public function restored(Historia $historia): void
    {
        //
    }

    /**
     * Handle the Historia "force deleted" event.
     */
    public function forceDeleted(Historia $historia): void
    {
        //
    }
}
