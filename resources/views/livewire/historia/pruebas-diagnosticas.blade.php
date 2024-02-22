<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pruebas diagnósticas</h2>

        <form class="grid grid-cols-2 gap-2">
            <div>
                <x-input-label for="examen_tejidos_periodontales" :value="__('Examen de tejidos periodontales')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="examen_tejidos_periodontales"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('examen_tejidos_periodontales')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="pruebas_vitalidad" :value="__('Pruebas de vitalidad')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="pruebas_vitalidad"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('pruebas_vitalidad')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="diagnostico_presuntivo" :value="__('Diagnosticos presuntivo')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="diagnostico_presuntivo"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('diagnostico_presuntivo')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="diagnostico_definitivo" :value="__('Diagnosticos definitivo')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="diagnostico_definitivo"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('diagnostico_definitivo')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="morfologia_conducto" :value="__('Morfología conducto')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="morfologia_conducto"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('morfologia_conducto')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="tratamiento_conducto" :value="__('Tratamiento conducto')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="tratamiento_conducto"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('tratamiento_conducto')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="metodos_obturacion" :value="__('Métodos obturación')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="metodos_obturacion"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('metodos_obturacion')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="tecnica_preparacion_biomecanica" :value="__('Técnica de preparación biomecánica')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="tecnica_preparacion_biomecanica"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('tecnica_preparacion_biomecanica')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="preparacion_quimica" :value="__('Preparacion quimica')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="preparacion_quimica"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('preparacion_quimica')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="numero_ultima_lima_utilizada" :value="__('Número de la lima utilizada')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="numero_ultima_lima_utilizada"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('numero_ultima_lima_utilizada')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="material_obturacion" :value="__('Material de obturación')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="material_obturacion"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('material_obturacion')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="medicacion" :value="__('Medicación')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="medicacion"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('medicacion')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="justificacion_medicacion" :value="__('Justificación de la medicación')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="justificacion_medicacion"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('justificacion_medicacion')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="observaciones" :value="__('Observaciones')"/>
                <x-text-input :disabled="!$enabled"
                              wire:model="observaciones"
                              class="block mt-1 w-full" type="text"
                              required autofocus/>
                <x-input-error :messages="$errors->get('observaciones')" class="mt-2"/>
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
