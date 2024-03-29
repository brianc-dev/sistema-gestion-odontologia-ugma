<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 print:col-span-4 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Modificaciones plan de tratamiento</h2>
        <form wire:submit="save" class="grid grid-cols-10 gap-2">
            <div>Fecha</div>
            <div>Diente</div>
            <div class="col-span-6 text-center">Tratamiento</div>
            <div>Firma</div>
            <div></div>
            @forelse($form->modificacionesPlanTratamiento as $plan)
                <div wire:key="{{ $loop->index }}">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="form.modificacionesPlanTratamiento.{{ $loop->index }}.fecha"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="form.modificacionesPlanTratamiento.{{ $loop->index }}.diente"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}" class="col-span-6">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="form.modificacionesPlanTratamiento.{{ $loop->index }}.tratamiento"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}" class="m-auto">
                    <input type="checkbox" disabled readonly/>
                </div>
                <div wire:key="{{ $loop->index }}" class="my-auto print:hidden">
                    @if($enabled)
                        <button class="btn-alert" wire:click.prevent="delete({{ $loop->index }})">Eliminar</button>
                    @endif
                </div>
            @empty
            @endforelse
            @if($enabled)
                <button wire:click.prevent="$dispatch('modificacionesplan-add')" class="btn-option col-span-2 justify-center">Nuevo plan</button>
            @endif
        </form>

    </div>

    <div class="print:hidden">
        <div class="p-4 bg-white">
            <h3 class="font-bold text-lg">Correcciones</h3>
            <div class="flex flex-col space-y-2">
                @if($historia?->estudiante->profesor)
                    <p>
                        Profesor: {{ $historia->estudiante->profesor->nombre . ' ' . $historia->estudiante->profesor->apellido }}</p>
                @endif
                <x-textarea wire:model.blur="form.correcciones" rows="11"
                            :disabled="!Auth::user()->isProfesor()"></x-textarea>
                <x-input-error :messages="$errors->get('form.correcciones')" class="mt-2"/>
                @if(Auth::user()->isProfesor() and $historia->estudiante->profesor == Auth::user()->profesor)
                    <livewire:button text="Guardar" event="historia-update-correcciones"/>
                @endif
            </div>
        </div>
    </div>
</div>
