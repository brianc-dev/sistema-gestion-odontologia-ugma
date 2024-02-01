<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\HistoriaForm;
use App\Models\Historia;
use Livewire\Component;

class CreateHistoria extends Component
{
    public HistoriaForm $form;

    #[On('historia-updated')]
    public function save()
    {
        // reformat cedula
        $this->form->cedula = $this->form->letra_cedula.$this->form->numero_cedula;
        $this->validate();

//        Historia::create(
//            $this->form->all()
//        );

        return $this->redirect('/dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.historia.create-historia');
    }
}
