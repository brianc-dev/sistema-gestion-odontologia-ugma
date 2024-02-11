<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class GuardarCodigo extends Component
{
    const MESSAGES = [
        'required' => 'El campo :attribute es requerido',
        'unique' => 'El valor ya existe'
    ];

    #[Validate([
        'numero_historia' => ['required', 'string', 'unique:' . Historia::class]
    ], as: [
        'numero_historia' => 'número de historia'
    ], message: self::MESSAGES)]
    public $numero_historia = '';

    public $historia;

    public function mount(Historia $historia)
    {
        $this->historia = $historia;
        $this->numero_historia = $historia->numero_historia;
    }

    #[On('historia-update-numero')]
    public function save()
    {
        $validated = $this->validate();

        $this->authorize('update', $this->historia);

        $this->historia->numero_historia = $validated['numero_historia'];

        if ($this->historia->isDirty()) {
            $this->historia->save();
        }

        session()->put('message', 'Número de historia asignado exitosamente');

        $this->redirectRoute('admin.historias');
    }

    public function render()
    {
        return view('livewire.historia.guardar-codigo');
    }
}
