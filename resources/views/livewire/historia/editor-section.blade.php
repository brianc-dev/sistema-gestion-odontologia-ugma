<div class="grid grid-cols-5 h-full print:flex print:flex-col">
    <div></div>
    <div class="col-span-3 flex justify-between p-2 space-x-4 bg-white w-full">
        <p>Alumno: {{ ($historia) ? $historia->estudiante->nombre .  ' ' . $historia->estudiante->apellido : Auth::user()->estudiante->nombre . ' ' . Auth::user()->estudiante->apellido}}</p>
        <p>Cédula: {{ $historia?->estudiante->cedula ?? Auth::user()->estudiante->cedula }}</p>
        <p>Lapso: {{ ($historia) ? $historia->estudiante->lapso->codigo : Auth::user()->estudiante->lapso->codigo }}</p>
        @if($historia?->created_at)
        <p>Fecha: {{ date_format($historia?->created_at, 'd-m-Y') }}</p>

        @endif

    </div>
    <div></div>
    <aside>
        <livewire:historia.menus :$sections/>
    </aside>
    <div class="print:hidden col-span-4">
            @switch($section)
                @case(0)
                    <livewire:historia.paciente wire:model="pacienteForm" :$enabled :$historia/>
                    @break
                @case(1)
                    <livewire:historia.antecedentes-medicos-personales wire:model="antecedentesMedicosPersonalesForm" :$enabled :$historia/>
                    @break
                @case(2)
                    <livewire:historia.antecedentes-medicos-familiares wire:model="antecedentesMedicosFamiliaresForm" :$enabled :$historia/>
                    @break
                @case(3)
                    <livewire:historia.medicamento wire:model="medicamentoForm" :$enabled :$historia/>
                    @break
                @case(4)
                    <livewire:historia.historia-odontologica wire:model="historiaOdontologicaForm" :$enabled :$historia/>
                    @break
                @case(5)
                    <livewire:historia.examen-radiografico wire:model="examenRadiograficoForm" :$enabled :$historia/>
                    @break
                @case(6)
                    <livewire:historia.periodontograma wire:model="periodontogramaForm" :$enabled :$historia/>
                    @break
                @case(7)
                    <livewire:historia.estudio-modelos wire:model="estudioModelosForm" :$enabled :$historia/>
                    @break
                @case(8)
                    <livewire:historia.plan-tratamiento wire:model="estudioModelosForm" :$enabled :$historia/>
                    @break
                @case(9)
                    <livewire:historia.modificaciones-plan-tratamiento wire:model="estudioModelosForm" :$enabled :$historia/>
                    @break
                @case(10)
                    <livewire:historia.presupuesto :$enabled :$historia/>
                    @break
                @case(11)
                    <livewire:historia.secuencia-tratamiento :$enabled :$historia/>
                    @break
                @case(12)
                    <livewire:historia.historia-periodontal :$enabled :$historia/>
                    @break
                @case(13)
                    <livewire:historia.ficha-endodontica :$enabled :$historia/>
                    @break
            @endswitch
    </div>
    <div class="hidden print:flex flex-col">
        <livewire:historia.paciente wire:model="pacienteForm" :$enabled :$historia/>
        <livewire:historia.antecedentes-medicos-personales wire:model="antecedentesMedicosPersonalesForm" :$enabled :$historia/>
        <livewire:historia.antecedentes-medicos-familiares wire:model="antecedentesMedicosFamiliaresForm" :$enabled :$historia/>
        <livewire:historia.medicamento wire:model="medicamentoForm" :$enabled :$historia/>
        <livewire:historia.historia-odontologica wire:model="historiaOdontologicaForm" :$enabled :$historia/>
        <livewire:historia.examen-radiografico wire:model="examenRadiograficoForm" :$enabled :$historia/>
        <livewire:historia.periodontograma wire:model="periodontogramaForm" :$enabled :$historia/>
        <livewire:historia.estudio-modelos wire:model="estudioModelosForm" :$enabled :$historia/>

    </div>
</div>
