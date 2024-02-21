<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Plan de tratamiento</h2>
        <form wire:submit="save" class="grid grid-cols-10 gap-2">
            <div>Diente</div>
            <div>Cavidad</div>
            <div class="col-span-8 text-center">Tratamiento</div>
            @forelse($planTratamiento as $plan)
                <div>
                    <x-text-input :disabled="!$enabled"
                                  wire:model.live="planTratamiento[{{ $loop->index }}]['diente']"
                                  id="diente"
                                  class="block mt-1 w-full" type="text"
                                  name="diente" required autofocus/>
                </div>
                <div>
                    <x-text-input :disabled="!$enabled"
                                  wire:model="planTratamiento[{{ $loop->index }}]['cavidad']" id="cavidad"
                                  class="block mt-1 w-full" type="text"
                                  name="cavidad" required autofocus/>
                </div>
                <div class="col-span-7">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="planTratamiento[{{ $loop->index }}]['tratamiento']"
                                  id="tratamiento"
                                  class="block mt-1 w-full" type="text"
                                  name="tratamiento" required autofocus/>
                </div>
                <div class="my-auto">
                    <button class="btn-alert" wire:click.prevent="delete({{ $loop->index }})">Eliminar</button>
                </div>
            @empty
            @endforelse
            <button wire:click.prevent="$dispatch('plan-add')" class="btn-option col-span-2 justify-center">Nuevo plan</button>
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
