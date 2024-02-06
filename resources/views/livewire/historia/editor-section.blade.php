<div class="container flex h-fit">
    <livewire:historia.menus :$sections/>
    @switch($section)
        @case(0)
            <livewire:historia.paciente :title="$sections[$section]" wire:model="pacienteForm" :$enabled />
            @break
        @case(1)
            <livewire:historia.antecedentes-medicos-personales :title="$sections[$section]" wire:model="antecedentesMedicosPersonalesForm" :$enabled />
            @break
        @case(2)
            <livewire:historia.antecedentes-medicos-familiares :title="$sections[$section]" wire:model="antecedentesMedicosFamiliaresForm" :$enabled />
            @break
        @case(3)
            <livewire:historia.medicamento :title="$sections[$section]" wire:model="medicamentoForm" :$enabled />
            @break
        @case(4)
            <livewire:historia.historia-odontologica :title="$sections[$section]" wire:model="historiaOdontologicaForm" :$enabled />
            @break
        @case(5)
            <livewire:historia.examen-radiografico :title="$sections[$section]" wire:model="examenRadiograficoForm" :$enabled />
            @break
        @case(6)
            <livewire:historia.periodontograma :title="$sections[$section]" wire:model="periodontogramaForm" :$enabled />
            @break
    @endswitch
</div>
