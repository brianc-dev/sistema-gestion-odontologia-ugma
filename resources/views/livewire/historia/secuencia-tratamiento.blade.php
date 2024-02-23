<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Secuencia de tratamiento</h2>
        <form wire:submit="save" class="grid grid-cols-10 gap-2">
            <div class=" text-center">Fecha</div>
            <div class=" text-center">Diente</div>
            <div class="col-span-3 text-center">Tratamiento realizado</div>
            <div class="col-span-3 text-center">Observaciones del docente</div>
            <div class="col-span-1 text-center">Nombre y firma del docente</div>
            <div></div>
            @forelse($secuenciaTratamientos as $secuencia)
                <div wire:key="{{ $loop->index }}">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="secuenciaTratamientos.{{ $loop->index }}.fecha"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="secuenciaTratamientos.{{ $loop->index }}.diente"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}" class="col-span-3">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="secuenciaTratamientos.{{ $loop->index }}.tratamiento_realizado"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}" class="col-span-3">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="secuenciaTratamientos.{{ $loop->index }}.observaciones_docente"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}">
                    <x-text-input :disabled="!$enabled"
                                  wire:model="secuenciaTratamientos.{{ $loop->index }}.nombre_firma_docente"
                                  class="block mt-1 w-full" type="text"
                                  required autofocus/>
                </div>
                <div wire:key="{{ $loop->index }}" class="my-auto">
                    <button class="btn-alert" wire:click.prevent="delete({{ $loop->index }})">Eliminar</button>
                </div>
            @empty
            @endforelse
            <button wire:click.prevent="$dispatch('secuencia-add')" class="btn-option col-span-2 justify-center">Nueva secuencia</button>
        </form>

    </div>

    <div class="print:hidden">
        <div class="p-4 bg-white">
            <h3 class="font-bold text-lg">Correcciones</h3>
            <div class="flex flex-col space-y-2">
                @if($historia?->estudiante->profesor)
                    <p>
                        Profesor: {{ $historia->estudiante->profesor->nombre . ' ' . $historia->estudiante->profesor->apellido }}
                    </p>
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
