<div class="container flex h-fit">
    <livewire:historia.menus :$sections/>
    @switch($section)
        @case(0)
            <livewire:historia.paciente :title="$sections[$section]" wire:model="pacienteForm"/>
            @break
        @case(1)
            <livewire:historia.antecedentes-medicos-personales :title="$sections[$section]" wire:model="antecedentesMedicosPersonalesForm"/>
            @break
        @case(2)
            <livewire:historia.antecedentes-medicos-familiares :title="$sections[$section]" wire:model="antecedentesMedicosFamiliaresForm"/>
            @break
        @case(3)
            <livewire:historia.medicamento :title="$sections[$section]" wire:model="medicamentoForm"/>
            @break
        @case(4)
            <livewire:historia.historia-odontologica :title="$sections[$section]" wire:model="historiaOdontologicaForm"/>
            @break
        @case(5)
            <livewire:historia.examen-radiografico :title="$sections[$section]" wire:model="examenRadiograficoForm"/>
            @break
        @case(6)
            <livewire:historia.periodontograma :title="$sections[$section]" wire:model="periodontogramaForm"/>
            @break
    @endswitch
</div>
