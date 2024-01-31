<div class="container flex h-fit">
    <livewire:historia.menus/>
    @switch($section)
        @case(0)
            <livewire:historia.create-historia/>
            @break
        @case(1)
            <livewire:historia.antecedentes-medicos-personales title="Antecedentes Médicos Personales"/>
            @break
        @case(2)
            <livewire:historia.medicamento title="Medicamento"/>
            @break
        @case(3)
            <livewire:historia.antecedentes-medicos-familiares title="Antecedentes Médicos Familiares"/>
            @break
        @default
    @endswitch
</div>
