<div class="container flex h-fit">
    <livewire:historia.menus :sections="$sections"/>
    @switch($section)
        @case(0)
            <livewire:historia.create-historia/>
            @break
        @case(1)
            <livewire:historia.antecedentes-medicos-personales :title="$sections[$section]"/>
            @break
        @case(2)
            <livewire:historia.medicamento :title="$sections[$section]"/>
            @break
        @case(3)
            <livewire:historia.antecedentes-medicos-familiares :title="$sections[$section]"/>
            @break
        @default
    @endswitch
</div>
