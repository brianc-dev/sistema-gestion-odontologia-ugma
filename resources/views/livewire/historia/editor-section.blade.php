<div class="container flex h-fit">
    <livewire:historia.menus/>
    @switch($section)
        @case(0)
            <livewire:historia.create-historia/>
            @break
        @case(3)
            <livewire:historia.antecedentes-medicos-personales title="Antecedentes Médicos Personales"/>
            @break
        @default
    @endswitch
</div>
