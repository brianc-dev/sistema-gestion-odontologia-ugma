<?php

namespace App\Livewire\Forms;

use App\Models\EstudioModelos;
use App\Models\Historia;
use App\Models\MaxilarSuperior;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EstudioModelosForm extends Form
{
    const messages = [
        'required' => 'El campo :attribute es requerido.',
        'alpha' => 'El campo :attribute solo debe poseer letras.',
        'between' => 'El campo :attribute debe tener entre :min y :max caracteres.',
        'min' => 'El campo :attribute debe ser mínimo :min',
        'max' => 'El campo :attribute debe ser máximo :max',
        'regex' => 'El campo :attribute no posee el formato correcto.',
        'numeric' => 'El campo :attribute debe ser numérico.',
        'integer' => 'El campo :attribute debe ser un número entero sin decimales.',
        'boolean' => 'El campo :attribute debe ser Sí o No.'
    ];

    #[Validate([
        'examenes_complementarios' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $examenes_complementarios = '';

    #[Validate([
        'interconsultas' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $interconsultas = '';

    #[Validate([
        'diagnostico' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $diagnostico = '';

    #[Validate([
        'pronostico' => ['string', 'between:0,300']
    ], message: self::messages)]
    public string $pronostico = '';

    // maxsup
    public string $maxsup_tipo_arco = '';
    public string $maxsup_forma_arco = '';
    public string $maxsup_simetria_arco = '';
    public string $maxsup_paladar = '';
    public string $maxsup_malposiciones_dentarias = '';
    public string $maxsup_dientes_ausentes = '';
    public string $maxsup_facetas_desgaste = '';
    public string $maxsup_diastemas = '';
    public string $maxsup_anomalias_forma_tamano_numero = '';
    // maxinf
    public string $maxinf_tipo_arco = '';
    public string $maxinf_forma_arco = '';
    public string $maxinf_simetria_arco = '';
    public string $maxinf_piso_boca = '';
    public string $maxinf_malposiciones_dentarias = '';
    public string $maxinf_dientes_ausentes = '';
    public string $maxinf_facetas_desgaste = '';
    public string $maxinf_diastemas = '';
    public string $maxinf_anomalias_forma_tamano_numero = '';
    public string $oclusion_linea_media = '';
    public string $oclusion_sobresalte = '';
    public string $oclusion_sobrepase = '';
    public string $oclusion_relacion_canina = '';
    public string $oclusion_relacion_molar = '';
    public string $oclusion_mordida_anterior = '';
    public string $oclusion_mordida_posterior = '';
    public string $oclusion_curvas_compensacion = '';
    public string $oclusion_plano_oclusal = '';

    public function setEstudioModelo(Historia $historia)
    {

        $estudioModelos = $historia->estudioModelos;
        $maxsup = $historia->maxilarSuperior->getAttributes();
        $maxinf = $historia->maxilarInferior->getAttributes();
        $oclusion = $historia->modelosOclusion->getAttributes();

        $newMaxsup = [];
        collect($maxsup)->each(function ($item, $key) use (&$newMaxsup) {
            $newKey = Str::start($key, 'maxsup_');
            $newMaxsup[$newKey] = $item;
        });

        $newMaxinf = [];
        collect($maxinf)->each(function ($item, $key) use (&$newMaxinf) {
            $newKey = Str::start($key, 'maxinf_');
            $newMaxinf[$newKey] = $item;
        });

        $newOclusion = [];
        collect($oclusion)->each(function ($item, $key) use (&$newOclusion) {
            $newKey = Str::start($key, 'oclusion_');
            $newOclusion[$newKey] = $item;
        });

        $this->fill($estudioModelos->attributesToArray());
        $this->fill($newMaxsup);
        $this->fill($newMaxinf);
        $this->fill($newOclusion);
    }
}
