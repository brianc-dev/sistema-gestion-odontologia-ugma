<div class="grid grid-cols-5 h-full">
    <livewire:historia.menus :$sections/>
    <div class="col-span-3">
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
    <div>
        <div class="p-4">
            <h3 class="font-bold text-lg">Correciones</h3>
            <div class="flex flex-col space-y-2">
                <p>Profesor: -</p>
                <x-textarea disabled></x-textarea>
            </div>
        </div>
    </div>
</div>
