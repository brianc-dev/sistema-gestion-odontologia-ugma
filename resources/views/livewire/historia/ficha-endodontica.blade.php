<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 print:col-span-4 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Ficha Endodontica</h2>
        <form class="">
            <div>
                <x-input-label for="ano" :value="__('Año')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="form.ano"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('form.ano')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="diente" :value="__('Diente')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="form.diente"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('form.diente')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="sintomas" :value="__('Sintomas')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="form.sintomas"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('form.sintomas')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="signos" :value="__('Signos')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="form.signos"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('form.signos')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="etiologia" :value="__('Etiología')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="form.etiologia"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('form.etiologia')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="interpretacion_radiografica" :value="__('Interpretación radiológica')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="form.interpretacion_radiografica"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('form.interpretacion_radiografica')" class="mt-2"/>
            </div>
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
