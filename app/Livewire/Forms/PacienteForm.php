<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PacienteForm extends Form
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
    ];

    #[Validate([
        'nombre' => ['required', 'string', 'alpha', 'between:2, 50']
    ], message: self::messages)]
    public string $nombre = '';

    #[Validate([
        'apellido' => ['required', 'string', 'alpha', 'between:2, 50']
    ], message: self::messages)]
    public string $apellido = '';

    #[Validate([
        'letra_cedula' => ['required', 'string', 'size:1', 'regex:/^[V|E]$/']
    ], message: self::messages)]
    public string $letra_cedula = '';

    #[Validate([
        'numero_cedula' => ['required', 'numeric', 'integer', 'min:100000', 'max:999999999', 'regex:/^[\d]{3,9}$/']
    ], message: self::messages)]
    public string $numero_cedula = '';

    #[Validate([
        'edad' => ['required', 'numeric', 'integer', 'min:0', 'max:150']
    ], message: self::messages)]
    public string $edad = '';

    #[Validate([
        'sexo' => ['required', 'string', 'size:1', 'regex:/^[M|F]$/']
    ], message: self::messages)]
    public string $sexo = '';

    #[Validate([
        'lugar_nacimiento' => ['required', 'string', 'between:3, 100']
    ], message: self::messages)]
    public string $lugar_nacimiento = '';

    #[Validate([
        'fecha_nacimiento' => ['required', 'string', 'date']
    ], message: self::messages)]
    public string $fecha_nacimiento = '';

    #[Validate([
        'ocupacion' => ['required', 'string', 'between:0, 50']
    ], message: self::messages)]
    public string $ocupacion = '';

    #[Validate([
        'direccion' => ['required', 'string', 'between:3, 100']
    ], message: self::messages)]
    public string $direccion = '';

    #[Validate([
        'telefono' => ['nullable', 'string', 'between:0, 15', 'regex:/^[\d]{4}-[\d]{7}$/']
    ], message: self::messages)]
    public string $telefono = '';

    #[Validate([
        'cedula' => ['required', 'string', 'between:5, 10', 'regex:/^[V|E][\d]{3,9}$/']
    ], message: self::messages)]
    public string $cedula = '';

    #[Validate([
        'contacto_emergencia' => ['nullable', 'string', 'between:0, 50']
    ], message: self::messages)]
    public string $contacto_emergencia = '';

    #[Validate([
        'telefono_emergencia' => ['nullable', 'string', 'between:0, 15', 'regex:/^[\d]{4}-[\d]{7}$/']
    ], message: self::messages)]
    public string $telefono_emergencia = '';

    #[Validate([
        'motivo_consulta' => ['required', 'string', 'between:0,200']
    ], message: self::messages)]
    public string $motivo_consulta = '';

    #[Validate([
        'enfermedad_actual' => ['required', 'string', 'between:0,200']
    ], message: self::messages)]
    public string $enfermedad_actual = '';
}
