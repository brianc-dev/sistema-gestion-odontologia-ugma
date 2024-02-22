<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Radiografias</h2>
        <form class="grid grid-cols-2 gap-2">
            <div>
                <x-input-label for="radiografia_inicial" :value="__('Radiografia inicial')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_inicial"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_inicial')" class="mt-2"/>
            </div>
            <div></div>
            <div>
                <x-input-label for="radiografia_penachos_1" :value="__('Radiografia penachos 1')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_penachos_1"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_penachos_1')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_penachos_2" :value="__('Radiografia penachos 2')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_penachos_2"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_penachos_2')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_final_1" :value="__('Radiografia final 1')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_final_1"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_final_1')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_final_2" :value="__('Radiografia final 2')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_final_2"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_final_2')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_final_3" :value="__('Radiografia final 3')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_final_3"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_final_3')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_final_4" :value="__('Radiografia final 4')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_final_4"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_final_4')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_conductometria" :value="__('Radiografia de conductometría')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_conductometria"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_conductometria')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="radiografia_cono_patron" :value="__('Radiografia de cono patrón')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="radiografia_cono_patron"
                              class="block mt-1 w-full" type="file"
                              required autofocus/>
                <x-input-error :messages="$errors->get('radiografia_cono_patron')" class="mt-2"/>
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
